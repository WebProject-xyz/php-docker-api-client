<?php

declare(strict_types=1);

namespace WebProject\DockerApiClient\Client;

use JsonException;
use Symfony\Component\HttpClient\Chunk\ServerSentEvent;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpClient\Psr18Client;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Webmozart\Assert\Assert;
use WebProject\DockerApi\Library\Generated\Client;
use WebProject\DockerApiClient\Event\ContainerEvent;
use function is_array;
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
     *
     * @throws TransportExceptionInterface
     * @throws JsonException
     */
    public function listenForEvents(callable $eventCallback): void
    {
        $client = HttpClient::create([
            'base_uri' => $this->baseUri,
            'bindto'   => $this->socketPath,
            'timeout'  => null,
        ]);

        $serializer = new Serializer(
            normalizers: [new ObjectNormalizer()],
            encoders: [new JsonEncoder()]
        );

        // Connect to the Docker API event stream
        $source = $client->request(method: 'GET', url: '/events');

        while ($client->request(method: 'GET', url: '/events')) {
            foreach ($client->stream(responses: $source, timeout: 2) as $r => $chunk) {
                if ($chunk->isTimeout()) {
                    // Handle timeout
                    continue;
                }

                if ($chunk->isLast()) {
                    // Handle end of stream
                    return;
                }

                // Process the ServerSentEvent chunk
                if ($chunk instanceof ServerSentEvent) {
                    // Do something with the event data
                    $content = $chunk->getContent();
                    if (!json_validate($content)) {
                        continue;
                    }

                    $eventObject = json_decode(json: $content, associative: true, depth: 512, flags: JSON_THROW_ON_ERROR);
                    if (is_array($eventObject) && ($eventObject['Type'] ?? false) === 'container') {
                        $event = $serializer->deserialize(data: $content, type: ContainerEvent::class, format: 'json');

                        $eventCallback($event);
                    }
                }
            }
        }
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

        $client = Client::create($httpClient);
        Assert::isInstanceOf(value: $client, class: Client::class);

        return new self(
            baseUri: $baseUri,
            socketPath: $socketPath,
            client: $client
        );
    }
}
