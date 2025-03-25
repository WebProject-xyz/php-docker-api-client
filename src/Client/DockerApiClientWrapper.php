<?php

declare(strict_types=1);

namespace WebProject\DockerApiClient\Client;

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpClient\Psr18Client;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Contracts\HttpClient\ChunkInterface;
use WebProject\DockerApi\Library\Generated\Client;
use WebProject\DockerApiClient\Event\ContainerEvent;
use function json_decode;

final class DockerApiClientWrapper
{
    public function __construct(
        private readonly string $baseUri,
        private readonly string $socketPath,
        private readonly Client $client,
    ) {
    }

    /**
     * @phpstan-param callable(ContainerEvent $event):void $eventCallback
     */
    public function listenForEvents(callable $eventCallback): true
    {
        $client = HttpClient::create([
            'base_uri' => $this->baseUri,
            'bindto'   => $this->socketPath,
            'timeout'  => null,
        ]);

        $serializer = new Serializer(
            [new ObjectNormalizer()],
            [new JsonEncoder()]
        );

        // Connect to the Docker API event stream
        $source = $client->request('GET', '/events');

        while ($client->request('GET', '/events')) {
            foreach ($client->stream($source, 2) as $r => $chunk) {
                if ($chunk->isTimeout()) {
                    // Handle timeout
                    continue;
                }

                if ($chunk->isLast()) {
                    // Handle end of stream
                    return true;
                }

                // Process the ServerSentEvent chunk
                if ($chunk instanceof ChunkInterface) {
                    // Do something with the event data
                    $content = $chunk->getContent();
                    if (!json_validate($content)) {
                        continue;
                    }

                    $eventObject = json_decode($content, true, 512, JSON_THROW_ON_ERROR);
                    if ($eventObject && ($eventObject['Type'] ?? false) === 'container') {
                        $event = $serializer->deserialize($content, ContainerEvent::class, 'json');
                        if (!$event instanceof ContainerEvent) {
                            continue;
                        }

                        $eventCallback($event);
                    }
                }
            }
        }

        return true;
    }

    public function getDockerClient(): Client
    {
        return $this->client;
    }

    public static function create(
        string $baseUri,
        string $socketPath,
        ?int $timeout = null,
    ): self {
        $httpClient = (new Psr18Client())->withOptions([
            'base_uri' => $baseUri,
            'bindto'   => $socketPath,
            'timeout'  => $timeout,
        ]);

        return new self(
            $baseUri,
            $socketPath,
            Client::create($httpClient)
        );
    }
}
