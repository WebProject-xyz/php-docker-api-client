<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Endpoint;

use function is_string;

class ImageCreate extends \WebProject\DockerApi\Library\Generated\Runtime\Client\BaseEndpoint implements \WebProject\DockerApi\Library\Generated\Runtime\Client\Endpoint
{
    use \WebProject\DockerApi\Library\Generated\Runtime\Client\EndpointTrait;

    /**
     * Pull or import an image.
     *
     * @param string|null $requestBody
     * @param array       $queryParameters {
     *
     * @var string $fromImage Name of the image to pull. If the name includes a tag or digest, specific behavior applies:
     *
     * - If only `fromImage` includes a tag, that tag is used.
     * - If both `fromImage` and `tag` are provided, `tag` takes precedence.
     * - If `fromImage` includes a digest, the image is pulled by digest, and `tag` is ignored.
     * - If neither a tag nor digest is specified, all tags are pulled.
     * @var string $fromSrc Source to import. The value may be a URL from which the image can be retrieved or `-` to read the image from the request body. This parameter may only be used when importing an image.
     * @var string $repo Repository name given to an image when it is imported. The repo may include a tag. This parameter may only be used when importing an image.
     * @var string $tag Tag or digest. If empty when pulling an image, this causes all tags for the given image to be pulled.
     * @var string $message set commit message for imported image
     * @var array  $changes Apply `Dockerfile` instructions to the image that is created,
     *             for example: `changes=ENV DEBUG=true`.
     *             Note that `ENV DEBUG=true` should be URI component encoded.
     *
     * Supported `Dockerfile` instructions:
     * `CMD`|`ENTRYPOINT`|`ENV`|`EXPOSE`|`ONBUILD`|`USER`|`VOLUME`|`WORKDIR`
     * @var string $platform Platform in the format os[/arch[/variant]].
     *
     * When used in combination with the `fromImage` option, the daemon checks
     * if the given image is present in the local image cache with the given
     * OS and Architecture, and otherwise attempts to pull the image. If the
     * option is not set, the host's native OS and Architecture are used.
     * If the given image does not exist in the local image cache, the daemon
     * attempts to pull the image with the host's native OS and Architecture.
     * If the given image does exists in the local image cache, but its OS or
     * architecture does not match, a warning is produced.
     *
     * When used with the `fromSrc` option to import an image from an archive,
     * this option sets the platform information for the imported image. If
     * the option is not set, the host's native OS and Architecture are used
     * for the imported image.
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
     */
    public function __construct(?string $requestBody = null, array $queryParameters = [], array $headerParameters = [])
    {
        $this->body             = $requestBody;
        $this->queryParameters  = $queryParameters;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/images/create';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if (is_string($this->body)) {
            return [['Content-Type' => ['text/plain']], $this->body];
        }
        if (is_string($this->body)) {
            return [['Content-Type' => ['application/octet-stream']], $this->body];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['fromImage', 'fromSrc', 'repo', 'tag', 'message', 'changes', 'platform']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('fromImage', ['string']);
        $optionsResolver->addAllowedTypes('fromSrc', ['string']);
        $optionsResolver->addAllowedTypes('repo', ['string']);
        $optionsResolver->addAllowedTypes('tag', ['string']);
        $optionsResolver->addAllowedTypes('message', ['string']);
        $optionsResolver->addAllowedTypes('changes', ['array']);
        $optionsResolver->addAllowedTypes('platform', ['string']);

        return $optionsResolver;
    }

    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['X-Registry-Auth']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('X-Registry-Auth', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @return null
     *
     * @throws \WebProject\DockerApi\Library\Generated\Exception\ImageCreateNotFoundException
     * @throws \WebProject\DockerApi\Library\Generated\Exception\ImageCreateInternalServerErrorException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body   = (string) $response->getBody();
        if (200 === $status) {
        }
        if ((null === $contentType) === false && (404 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \WebProject\DockerApi\Library\Generated\Exception\ImageCreateNotFoundException($serializer->deserialize($body, 'WebProject\DockerApi\Library\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ((null === $contentType) === false && (500 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \WebProject\DockerApi\Library\Generated\Exception\ImageCreateInternalServerErrorException($serializer->deserialize($body, 'WebProject\DockerApi\Library\Generated\Model\ErrorResponse', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
