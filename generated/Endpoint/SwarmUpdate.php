<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Endpoint;

class SwarmUpdate extends \WebProject\DockerApi\Library\Generated\Runtime\Client\BaseEndpoint implements \WebProject\DockerApi\Library\Generated\Runtime\Client\Endpoint
{
    use \WebProject\DockerApi\Library\Generated\Runtime\Client\EndpointTrait;
    protected $accept;

    /**
     * @param \WebProject\DockerApi\Library\Generated\Model\SwarmSpec $requestBody
     * @param array                                                   $queryParameters {
     *
     * @var int  $version The version number of the swarm object being updated. This is
     *           required to avoid conflicting writes.
     * @var bool $rotateWorkerToken rotate the worker join token
     * @var bool $rotateManagerToken rotate the manager join token
     * @var bool $rotateManagerUnlockKey Rotate the manager unlock key.
     *           }
     *
     * @param array $accept Accept content header application/json|text/plain
     */
    public function __construct(\WebProject\DockerApi\Library\Generated\Model\SwarmSpec $requestBody, array $queryParameters = [], array $accept = [])
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

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \WebProject\DockerApi\Library\Generated\Model\SwarmSpec) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
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
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body   = (string) $response->getBody();
        if (200 === $status) {
        }
        if ((null === $contentType) === false && (400 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \WebProject\DockerApi\Library\Generated\Exception\SwarmUpdateBadRequestException($serializer->deserialize($body, 'WebProject\DockerApi\Library\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ((null === $contentType) === false && (500 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \WebProject\DockerApi\Library\Generated\Exception\SwarmUpdateInternalServerErrorException($serializer->deserialize($body, 'WebProject\DockerApi\Library\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ((null === $contentType) === false && (503 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \WebProject\DockerApi\Library\Generated\Exception\SwarmUpdateServiceUnavailableException($serializer->deserialize($body, 'WebProject\DockerApi\Library\Generated\Model\ErrorResponse', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
