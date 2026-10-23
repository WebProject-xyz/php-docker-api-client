<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Endpoint;

class ImageHistory extends \WebProject\DockerApi\Library\Generated\Runtime\Client\BaseEndpoint implements \WebProject\DockerApi\Library\Generated\Runtime\Client\Endpoint
{
    use \WebProject\DockerApi\Library\Generated\Runtime\Client\EndpointTrait;
    protected $name;

    /**
     * Return parent layers of an image.
     *
     * @param string $name Image name or ID
     * @param array{
     *    "platform"?: string, //JSON-encoded OCI platform to select the platform-variant.
     *                         //If omitted, it defaults to any locally available platform,
     *                         //prioritizing the daemon's host platform.
     *                         //
     *                         //If the daemon provides a multi-platform image store, this selects
     *                         //the platform-variant to show the history for. If the image is
     *                         //a single-platform image, or if the multi-platform image does not
     *                         //provide a variant matching the given platform, an error is returned.
     *                         //
     *                         //Example: `{"os": "linux", "architecture": "arm", "variant": "v5"}`
     * } $queryParameters
     */
    public function __construct(string $name, array $queryParameters = [])
    {
        $this->name            = $name;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{name}'], [rawurlencode($this->name)], '/images/{name}/history');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['platform']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('platform', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @return \WebProject\DockerApi\Library\Generated\Model\ImageHistoryResponseItem[]
     *
     * @throws \WebProject\DockerApi\Library\Generated\Exception\ImageHistoryNotFoundException
     * @throws \WebProject\DockerApi\Library\Generated\Exception\ImageHistoryInternalServerErrorException
     * @throws \WebProject\DockerApi\Library\Generated\Exception\BadResponseException
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body   = $response->getContent(false);
        if (null !== $contentType && (200 === $status && false !== stripos(strtolower($contentType), 'application/json'))) {
            return $this->deserializeListResponse($serializer, $body, 'WebProject\DockerApi\Library\Generated\Model\ImageHistoryResponseItem[]', 'json');
        }
        if (null !== $contentType && (404 === $status && false !== stripos(strtolower($contentType), 'application/json'))) {
            throw new \WebProject\DockerApi\Library\Generated\Exception\ImageHistoryNotFoundException($serializer->deserialize($body, 'WebProject\DockerApi\Library\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (null !== $contentType && (500 === $status && false !== stripos(strtolower($contentType), 'application/json'))) {
            throw new \WebProject\DockerApi\Library\Generated\Exception\ImageHistoryInternalServerErrorException($serializer->deserialize($body, 'WebProject\DockerApi\Library\Generated\Model\ErrorResponse', 'json'), $response);
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
        return null;
    }
}
