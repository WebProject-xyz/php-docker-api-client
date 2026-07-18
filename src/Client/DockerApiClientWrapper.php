<?php

declare(strict_types=1);

namespace WebProject\DockerApiClient\Client;

use JsonException;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpClient\Psr18Client;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Webmozart\Assert\Assert;
use WebProject\DockerApi\Library\Generated\Client;
use WebProject\DockerApiClient\Event\ContainerEvent;
use function is_array;
use function json_decode;
use function json_validate;
use function strpos;
use function substr;
use function trim;

final class DockerApiClientWrapper
{
    public function __construct(
        private readonly string $baseUri,
        private readonly string $socketPath,
        private readonly Client $client,
        private readonly ?HttpClientInterface $eventStreamClient = null,
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
        $client = $this->eventStreamClient ?? HttpClient::create([
            'base_uri' => $this->baseUri,
            'bindto'   => $this->socketPath,
            // Infinite idle timeout. The Docker event stream is long-lived and
            // often silent for minutes. A finite timeout (php.ini
            // default_socket_timeout, 60s by default) ends the stream on idle,
            // so listenForEvents() returns and the process exits — under a
            // "restart: always" container that shows up as a restart every 60s.
            // -1 disables the idle timeout, so the listener blocks until a real
            // event or a genuine end-of-stream arrives.
            'timeout'  => -1,
        ]);

        $serializer = new Serializer(
            normalizers: [new ObjectNormalizer()],
            encoders: [new JsonEncoder()]
        );

        // Connect to the Docker API event stream. Docker streams
        // newline-delimited JSON objects (Content-Type: application/json),
        // NOT Server-Sent Events, so the payload arrives as plain data chunks
        // that must be buffered and split on newlines before decoding.
        $source = $client->request(method: 'GET', url: '/events');

        $buffer = '';
        foreach ($client->stream(responses: $source) as $chunk) {
            if ($chunk->isTimeout()) {
                continue;
            }

            if ($chunk->isLast()) {
                return;
            }

            $buffer .= $chunk->getContent();

            while (false !== ($newlinePos = strpos($buffer, "\n"))) {
                $line   = trim(substr($buffer, 0, $newlinePos));
                $buffer = substr($buffer, $newlinePos + 1);

                if ('' === $line || !json_validate($line)) {
                    continue;
                }

                $eventObject = json_decode(json: $line, associative: true, depth: 512, flags: JSON_THROW_ON_ERROR);
                if (is_array($eventObject) && ($eventObject['Type'] ?? false) === 'container') {
                    $event = $serializer->denormalize(data: $eventObject, type: ContainerEvent::class, format: 'json');

                    $eventCallback($event);
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
