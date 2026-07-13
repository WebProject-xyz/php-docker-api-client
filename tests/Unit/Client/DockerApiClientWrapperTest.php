<?php

declare(strict_types=1);

namespace WebProject\DockerApiClient\Tests\Unit\Client;

use Codeception\Test\Unit;
use Symfony\Component\HttpClient\MockHttpClient;
use Symfony\Component\HttpClient\Response\MockResponse;
use WebProject\DockerApi\Library\Generated\Client;
use WebProject\DockerApiClient\Client\DockerApiClientWrapper;
use WebProject\DockerApiClient\Event\ContainerEvent;

use function json_encode;

use const JSON_THROW_ON_ERROR;

final class DockerApiClientWrapperTest extends Unit
{
    public function testGetDockerClient(): void
    {
        $mockClient = $this->createMock(Client::class);
        $wrapper    = new DockerApiClientWrapper('http://localhost', '/var/run/docker.sock', $mockClient);

        $this->assertSame($mockClient, $wrapper->getDockerClient());
    }

    public function testCreate(): void
    {
        $wrapper = DockerApiClientWrapper::create('http://localhost', '/var/run/docker.sock');
        $this->assertInstanceOf(DockerApiClientWrapper::class, $wrapper);
        $this->assertInstanceOf(Client::class, $wrapper->getDockerClient());
    }

    public function testListenForEventsDispatchesOnlyContainerEvents(): void
    {
        // Docker streams newline-delimited JSON objects; only container events
        // must reach the callback, non-container events are ignored.
        $wrapper = $this->createWrapperStreaming([
            $this->containerEventJson('start', 'abc123') . "\n",
            json_encode(['Type' => 'network', 'Action' => 'connect'], JSON_THROW_ON_ERROR) . "\n",
            $this->containerEventJson('stop', 'def456') . "\n",
        ]);

        /** @var list<ContainerEvent> $received */
        $received = [];
        $wrapper->listenForEvents(static function (ContainerEvent $event) use (&$received): void {
            $received[] = $event;
        });

        $this->assertCount(2, $received);
        $this->assertSame('start', $received[0]->Action);
        $this->assertSame('abc123', $received[0]->Actor->ID);
        $this->assertSame('stop', $received[1]->Action);
        $this->assertSame('def456', $received[1]->Actor->ID);
    }

    public function testListenForEventsBuffersJsonSplitAcrossChunks(): void
    {
        // A single JSON object may be split across two transport chunks and
        // must be reassembled from the buffer before decoding.
        $json = $this->containerEventJson('start', 'split-id') . "\n";
        $half = (int) (strlen($json) / 2);

        $wrapper = $this->createWrapperStreaming([
            substr($json, 0, $half),
            substr($json, $half),
        ]);

        /** @var list<ContainerEvent> $received */
        $received = [];
        $wrapper->listenForEvents(static function (ContainerEvent $event) use (&$received): void {
            $received[] = $event;
        });

        $this->assertCount(1, $received);
        $this->assertSame('split-id', $received[0]->Actor->ID);
    }

    public function testListenForEventsSkipsInvalidJsonLines(): void
    {
        $wrapper = $this->createWrapperStreaming([
            "not-json-at-all\n",
            $this->containerEventJson('die', 'valid-id') . "\n",
        ]);

        /** @var list<ContainerEvent> $received */
        $received = [];
        $wrapper->listenForEvents(static function (ContainerEvent $event) use (&$received): void {
            $received[] = $event;
        });

        $this->assertCount(1, $received);
        $this->assertSame('die', $received[0]->Action);
        $this->assertSame('valid-id', $received[0]->Actor->ID);
    }

    /**
     * @param list<string> $chunks
     */
    private function createWrapperStreaming(array $chunks): DockerApiClientWrapper
    {
        $mockHttpClient = new MockHttpClient(new MockResponse($chunks));

        return new DockerApiClientWrapper(
            baseUri: 'http://localhost',
            socketPath: '/var/run/docker.sock',
            client: $this->createMock(Client::class),
            eventStreamClient: $mockHttpClient,
        );
    }

    private function containerEventJson(string $action, string $id): string
    {
        return json_encode([
            'Type'     => 'container',
            'Action'   => $action,
            'Actor'    => ['ID' => $id, 'Attributes' => ['name' => 'test']],
            'scope'    => 'local',
            'time'     => 1_700_000_000,
            'timeNano' => 1_700_000_000_000_000_000,
        ], JSON_THROW_ON_ERROR);
    }
}
