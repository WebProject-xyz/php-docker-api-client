<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Endpoint;

class ImagePush extends \WebProject\DockerApi\Library\Generated\Runtime\Client\BaseEndpoint implements \WebProject\DockerApi\Library\Generated\Runtime\Client\Endpoint
{
    use \WebProject\DockerApi\Library\Generated\Runtime\Client\EndpointTrait;
    protected $name;
    protected $accept;

    /**
     * Push an image to a registry.
     *
     * If you wish to push an image on to a private registry, that image must
     * already have a tag which references the registry. For example,
     * `registry.example.com/myimage:latest`.
     *
     * The push is cancelled if the HTTP connection is closed.
     *
     * @param string $name Name of the image to push. For example, `registry.example.com/myimage`.
     *                     The image must be present in the local image store with the same name.
     *
     * The name should be provided without tag; if a tag is provided, it
     * is ignored. For example, `registry.example.com/myimage:latest` is
     * considered equivalent to `registry.example.com/myimage`.
     *
     * Use the `tag` parameter to specify the tag to push.
     * @param array $queryParameters {
     *
     * @var string $tag Tag of the image to push. For example, `latest`. If no tag is provided,
     *             all tags of the given image that are present in the local image store
     *             are pushed.
     * @var string $platform JSON-encoded OCI platform to select the platform-variant to push.
     *             If not provided, all available variants will attempt to be pushed.
     *
     * If the daemon provides a multi-platform image store, this selects
     * the platform-variant to push to the registry. If the image is
     * a single-platform image, or if the multi-platform image does not
     * provide a variant matching the given platform, an error is returned.
     *
     * Example: `{"os": "linux", "architecture": "arm", "variant": "v5"}`
     *
     * }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Registry-Auth A base64url-encoded auth configuration.
     *
     * Refer to the [authentication section](#section/Authentication) for
     * details.
     *
     * }
     *
     * @param array $accept Accept content header application/json|text/plain
     */
    public function __construct(string $name, array $queryParameters = [], array $headerParameters = [], array $accept = [])
    {
        $this->name             = $name;
        $this->queryParameters  = $queryParameters;
        $this->headerParameters = $headerParameters;
        $this->accept           = $accept;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{name}'], [$this->name], '/images/{name}/push');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
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
        $optionsResolver->setDefined(['tag', 'platform']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('tag', ['string']);
        $optionsResolver->addAllowedTypes('platform', ['string']);

        return $optionsResolver;
    }

    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['X-Registry-Auth']);
        $optionsResolver->setRequired(['X-Registry-Auth']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('X-Registry-Auth', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @return null
     *
     * @throws \WebProject\DockerApi\Library\Generated\Exception\ImagePushNotFoundException
     * @throws \WebProject\DockerApi\Library\Generated\Exception\ImagePushInternalServerErrorException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body   = (string) $response->getBody();
        if (200 === $status) {
        }
        if ((null === $contentType) === false && (404 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \WebProject\DockerApi\Library\Generated\Exception\ImagePushNotFoundException($serializer->deserialize($body, 'WebProject\DockerApi\Library\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ((null === $contentType) === false && (500 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \WebProject\DockerApi\Library\Generated\Exception\ImagePushInternalServerErrorException($serializer->deserialize($body, 'WebProject\DockerApi\Library\Generated\Model\ErrorResponse', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
