<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Endpoint;

class ImageDelete extends \WebProject\DockerApi\Library\Generated\Runtime\Client\BaseEndpoint implements \WebProject\DockerApi\Library\Generated\Runtime\Client\Endpoint
{
    use \WebProject\DockerApi\Library\Generated\Runtime\Client\EndpointTrait;
    protected $name;

    /**
     * Remove an image, along with any untagged parent images that were
     * referenced by that image.
     *
     * Images can't be removed if they have descendant images, are being
     * used by a running container or are being used by a build.
     *
     * @param string $name Image name or ID
     * @param array{
     *    "force"?: bool, //Remove the image even if it is being used by stopped containers or has other tags
     *    "noprune"?: bool, //Do not delete untagged parent images
     *    "platforms"?: array, //Select platform-specific content to delete.
     *                         //Multiple values are accepted.
     *                         //Each platform is a OCI platform encoded as a JSON string.
     * } $queryParameters
     */
    public function __construct(string $name, array $queryParameters = [])
    {
        $this->name            = $name;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getUri(): string
    {
        return str_replace(['{name}'], [rawurlencode($this->name)], '/images/{name}');
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
        $optionsResolver->setDefined(['force', 'noprune', 'platforms']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['force' => false, 'noprune' => false]);
        $optionsResolver->addAllowedTypes('force', ['bool']);
        $optionsResolver->addAllowedTypes('noprune', ['bool']);
        $optionsResolver->addAllowedTypes('platforms', ['array']);

        return $optionsResolver;
    }

    protected function getQueryStyles(): array
    {
        return ['platforms' => ['style' => 'form', 'explode' => true]];
    }

    /**
     * {@inheritdoc}
     *
     * @return \WebProject\DockerApi\Library\Generated\Model\ImageDeleteResponseItem[]
     *
     * @throws \WebProject\DockerApi\Library\Generated\Exception\ImageDeleteNotFoundException
     * @throws \WebProject\DockerApi\Library\Generated\Exception\ImageDeleteConflictException
     * @throws \WebProject\DockerApi\Library\Generated\Exception\ImageDeleteInternalServerErrorException
     * @throws \WebProject\DockerApi\Library\Generated\Exception\BadResponseException
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body   = $response->getContent(false);
        if (null !== $contentType && (200 === $status && false !== stripos(strtolower($contentType), 'application/json'))) {
            return $this->deserializeListResponse($serializer, $body, 'WebProject\DockerApi\Library\Generated\Model\ImageDeleteResponseItem[]', 'json');
        }
        if (null !== $contentType && (404 === $status && false !== stripos(strtolower($contentType), 'application/json'))) {
            throw new \WebProject\DockerApi\Library\Generated\Exception\ImageDeleteNotFoundException($serializer->deserialize($body, 'WebProject\DockerApi\Library\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (null !== $contentType && (409 === $status && false !== stripos(strtolower($contentType), 'application/json'))) {
            throw new \WebProject\DockerApi\Library\Generated\Exception\ImageDeleteConflictException($serializer->deserialize($body, 'WebProject\DockerApi\Library\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (null !== $contentType && (500 === $status && false !== stripos(strtolower($contentType), 'application/json'))) {
            throw new \WebProject\DockerApi\Library\Generated\Exception\ImageDeleteInternalServerErrorException($serializer->deserialize($body, 'WebProject\DockerApi\Library\Generated\Model\ErrorResponse', 'json'), $response);
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
