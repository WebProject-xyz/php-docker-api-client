<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Endpoint;

use JsonException;

class SwarmInit extends \WebProject\DockerApi\Library\Generated\Runtime\Client\BaseEndpoint implements \WebProject\DockerApi\Library\Generated\Runtime\Client\Endpoint
{
    use \WebProject\DockerApi\Library\Generated\Runtime\Client\EndpointTrait;
    protected $accept;

    /**
     * @param \WebProject\DockerApi\Library\Generated\Model\SwarmInitPostBody $requestBody
     * @param array                                                           $accept      Accept content header application/json|text/plain
     */
    public function __construct(\WebProject\DockerApi\Library\Generated\Model\SwarmInitPostBody $requestBody, array $accept = [])
    {
        $this->body   = $requestBody;
        $this->accept = $accept;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/swarm/init';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        if ($this->body instanceof \WebProject\DockerApi\Library\Generated\Model\SwarmInitPostBody) {
            return [['Content-Type' => ['application/json']], \WebProject\DockerApi\Library\Generated\Runtime\Client\JsonPayload::encode($serializer, $this->body)];
        }
        if ($this->body instanceof \WebProject\DockerApi\Library\Generated\Model\SwarmInitPostBody) {
            return [['Content-Type' => ['text/plain']], $this->body];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/json', 'text/plain']];
        }

        return $this->accept;
    }

    /**
     * {@inheritdoc}
     *
     * @return string
     *
     * @throws \WebProject\DockerApi\Library\Generated\Exception\SwarmInitBadRequestException
     * @throws \WebProject\DockerApi\Library\Generated\Exception\SwarmInitInternalServerErrorException
     * @throws \WebProject\DockerApi\Library\Generated\Exception\SwarmInitServiceUnavailableException
     * @throws \WebProject\DockerApi\Library\Generated\Exception\BadResponseException
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body   = $response->getContent(false);
        if (null !== $contentType && (200 === $status && false !== stripos(strtolower($contentType), 'application/json'))) {
            try {
                $decodedBody = json_decode($body, false, 512, JSON_THROW_ON_ERROR);

                return $decodedBody;
            } catch (JsonException $jsonException) {
                throw new \Jane\Component\JsonSchemaRuntime\Exception\MalformedJsonException('Malformed JSON response body.', 0, $jsonException);
            }
        }
        if (null !== $contentType && (400 === $status && false !== stripos(strtolower($contentType), 'application/json'))) {
            throw new \WebProject\DockerApi\Library\Generated\Exception\SwarmInitBadRequestException($serializer->deserialize($body, 'WebProject\DockerApi\Library\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (null !== $contentType && (500 === $status && false !== stripos(strtolower($contentType), 'application/json'))) {
            throw new \WebProject\DockerApi\Library\Generated\Exception\SwarmInitInternalServerErrorException($serializer->deserialize($body, 'WebProject\DockerApi\Library\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (null !== $contentType && (503 === $status && false !== stripos(strtolower($contentType), 'application/json'))) {
            throw new \WebProject\DockerApi\Library\Generated\Exception\SwarmInitServiceUnavailableException($serializer->deserialize($body, 'WebProject\DockerApi\Library\Generated\Model\ErrorResponse', 'json'), $response);
        }
        throw new \WebProject\DockerApi\Library\Generated\Exception\BadResponseException($status, $body, $response);
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }

    public function getFetchMode(): string
    {
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Eager->value;
    }

    public function getTargetClass(): ?string
    {
        return null;
    }
}
