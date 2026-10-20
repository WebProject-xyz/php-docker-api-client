<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Endpoint;

class SwarmUpdate extends \WebProject\DockerApi\Library\Generated\Runtime\Client\BaseEndpoint implements \WebProject\DockerApi\Library\Generated\Runtime\Client\Endpoint
{
    use \WebProject\DockerApi\Library\Generated\Runtime\Client\EndpointTrait;
    protected $accept;

    /**
     * @param \WebProject\DockerApi\Library\Generated\Model\SwarmSpec $requestBody
     * @param array{
     *    "version": int, //The version number of the swarm object being updated. This is
     *                    //required to avoid conflicting writes.
     *    "rotateWorkerToken"?: bool, //Rotate the worker join token.
     *    "rotateManagerToken"?: bool, //Rotate the manager join token.
     *    "rotateManagerUnlockKey"?: bool, //Rotate the manager unlock key.
     * } $queryParameters
     * @param array $accept Accept content header application/json|text/plain
     */
    public function __construct(\WebProject\DockerApi\Library\Generated\Model\SwarmSpec $requestBody, array $queryParameters, array $accept = [])
    {
        $this->body            = $requestBody;
        $this->queryParameters = $queryParameters;
        $this->accept          = $accept;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/swarm/update';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        if ($this->body instanceof \WebProject\DockerApi\Library\Generated\Model\SwarmSpec) {
            return [['Content-Type' => ['application/json']], \WebProject\DockerApi\Library\Generated\Runtime\Client\JsonPayload::encode($serializer, $this->body)];
        }
        if ($this->body instanceof \WebProject\DockerApi\Library\Generated\Model\SwarmSpec) {
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

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['version', 'rotateWorkerToken', 'rotateManagerToken', 'rotateManagerUnlockKey']);
        $optionsResolver->setRequired(['version']);
        $optionsResolver->setDefaults(['rotateWorkerToken' => false, 'rotateManagerToken' => false, 'rotateManagerUnlockKey' => false]);
        $optionsResolver->addAllowedTypes('version', ['int']);
        $optionsResolver->addAllowedTypes('rotateWorkerToken', ['bool']);
        $optionsResolver->addAllowedTypes('rotateManagerToken', ['bool']);
        $optionsResolver->addAllowedTypes('rotateManagerUnlockKey', ['bool']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @return null
     *
     * @throws \WebProject\DockerApi\Library\Generated\Exception\SwarmUpdateBadRequestException
     * @throws \WebProject\DockerApi\Library\Generated\Exception\SwarmUpdateInternalServerErrorException
     * @throws \WebProject\DockerApi\Library\Generated\Exception\SwarmUpdateServiceUnavailableException
     * @throws \WebProject\DockerApi\Library\Generated\Exception\BadResponseException
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body   = $response->getContent(false);
        if (200 === $status) {
            return null;
        }
        if (null !== $contentType && (400 === $status && false !== stripos(strtolower($contentType), 'application/json'))) {
            throw new \WebProject\DockerApi\Library\Generated\Exception\SwarmUpdateBadRequestException($serializer->deserialize($body, 'WebProject\DockerApi\Library\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (null !== $contentType && (500 === $status && false !== stripos(strtolower($contentType), 'application/json'))) {
            throw new \WebProject\DockerApi\Library\Generated\Exception\SwarmUpdateInternalServerErrorException($serializer->deserialize($body, 'WebProject\DockerApi\Library\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (null !== $contentType && (503 === $status && false !== stripos(strtolower($contentType), 'application/json'))) {
            throw new \WebProject\DockerApi\Library\Generated\Exception\SwarmUpdateServiceUnavailableException($serializer->deserialize($body, 'WebProject\DockerApi\Library\Generated\Model\ErrorResponse', 'json'), $response);
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
