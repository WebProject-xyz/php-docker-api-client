<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Endpoint;

class ContainerTop extends \WebProject\DockerApi\Library\Generated\Runtime\Client\BaseEndpoint implements \WebProject\DockerApi\Library\Generated\Runtime\Client\Endpoint
{
    use \WebProject\DockerApi\Library\Generated\Runtime\Client\EndpointTrait;
    protected $id;
    protected $accept;

    /**
     * On Unix systems, this is done by running the `ps` command. This endpoint
     * is not supported on Windows.
     *
     * @param string $id ID or name of the container
     * @param array{
     *    "ps_args"?: string, //The arguments to pass to `ps`. For example, `aux`
     * } $queryParameters
     * @param array $accept Accept content header application/json|text/plain
     */
    public function __construct(string $id, array $queryParameters = [], array $accept = [])
    {
        $this->id              = $id;
        $this->queryParameters = $queryParameters;
        $this->accept          = $accept;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [rawurlencode($this->id)], '/containers/{id}/top');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
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
        $optionsResolver->setDefined(['ps_args']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['ps_args' => '-ef']);
        $optionsResolver->addAllowedTypes('ps_args', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @return \WebProject\DockerApi\Library\Generated\Model\ContainerTopResponse
     *
     * @throws \WebProject\DockerApi\Library\Generated\Exception\ContainerTopNotFoundException
     * @throws \WebProject\DockerApi\Library\Generated\Exception\ContainerTopInternalServerErrorException
     * @throws \WebProject\DockerApi\Library\Generated\Exception\BadResponseException
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body   = $response->getContent(false);
        if (null !== $contentType && (200 === $status && false !== stripos(strtolower($contentType), 'application/json'))) {
            return $serializer->deserialize($body, 'WebProject\DockerApi\Library\Generated\Model\ContainerTopResponse', 'json');
        }
        if (null !== $contentType && (404 === $status && false !== stripos(strtolower($contentType), 'application/json'))) {
            throw new \WebProject\DockerApi\Library\Generated\Exception\ContainerTopNotFoundException($serializer->deserialize($body, 'WebProject\DockerApi\Library\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (null !== $contentType && (500 === $status && false !== stripos(strtolower($contentType), 'application/json'))) {
            throw new \WebProject\DockerApi\Library\Generated\Exception\ContainerTopInternalServerErrorException($serializer->deserialize($body, 'WebProject\DockerApi\Library\Generated\Model\ErrorResponse', 'json'), $response);
        }
        throw new \WebProject\DockerApi\Library\Generated\Exception\BadResponseException($status, $body, $response);
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }

    public function getFetchMode(): string
    {
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Lazy->value;
    }

    public function getTargetClass(): ?string
    {
        return \WebProject\DockerApi\Library\Generated\Model\ContainerTopResponse::class;
    }
}
