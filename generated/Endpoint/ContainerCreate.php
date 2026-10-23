<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Endpoint;

class ContainerCreate extends \WebProject\DockerApi\Library\Generated\Runtime\Client\BaseEndpoint implements \WebProject\DockerApi\Library\Generated\Runtime\Client\Endpoint
{
    use \WebProject\DockerApi\Library\Generated\Runtime\Client\EndpointTrait;

    /**
     * @param \WebProject\DockerApi\Library\Generated\Model\ContainersCreatePostBody $requestBody
     * @param array{
     *    "name"?: string, //Assign the specified name to the container. Must match
     *                     //`/?[a-zA-Z0-9][a-zA-Z0-9_.-]+`.
     *    "platform"?: string, //Platform in the format `os[/arch[/variant]]` used for image lookup.
     *                         //
     *                         //When specified, the daemon checks if the requested image is present
     *                         //in the local image cache with the given OS and Architecture, and
     *                         //otherwise returns a `404` status.
     *                         //
     *                         //If the option is not set, the host's native OS and Architecture are
     *                         //used to look up the image in the image cache. However, if no platform
     *                         //is passed and the given image does exist in the local image cache,
     *                         //but its OS or architecture does not match, the container is created
     *                         //with the available image, and a warning is added to the `Warnings`
     *                         //field in the response, for example;
     *                         //
     *                         //    WARNING: The requested image's platform (linux/arm64/v8) does not
     *                         //             match the detected host platform (linux/amd64) and no
     *                         //             specific platform was requested
     * } $queryParameters
     */
    public function __construct(\WebProject\DockerApi\Library\Generated\Model\ContainersCreatePostBody $requestBody, array $queryParameters = [])
    {
        $this->body            = $requestBody;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/containers/create';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        if ($this->body instanceof \WebProject\DockerApi\Library\Generated\Model\ContainersCreatePostBody) {
            return [['Content-Type' => ['application/json']], \WebProject\DockerApi\Library\Generated\Runtime\Client\JsonPayload::encode($serializer, $this->body)];
        }
        if ($this->body instanceof \WebProject\DockerApi\Library\Generated\Model\ContainersCreatePostBody) {
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
        $optionsResolver->setDefined(['name', 'platform']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['platform' => '']);
        $optionsResolver->addAllowedTypes('name', ['string']);
        $optionsResolver->addAllowedTypes('platform', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @return \WebProject\DockerApi\Library\Generated\Model\ContainerCreateResponse
     *
     * @throws \WebProject\DockerApi\Library\Generated\Exception\ContainerCreateBadRequestException
     * @throws \WebProject\DockerApi\Library\Generated\Exception\ContainerCreateNotFoundException
     * @throws \WebProject\DockerApi\Library\Generated\Exception\ContainerCreateConflictException
     * @throws \WebProject\DockerApi\Library\Generated\Exception\ContainerCreateInternalServerErrorException
     * @throws \WebProject\DockerApi\Library\Generated\Exception\BadResponseException
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body   = $response->getContent(false);
        if (null !== $contentType && (201 === $status && false !== stripos(strtolower($contentType), 'application/json'))) {
            return $serializer->deserialize($body, 'WebProject\DockerApi\Library\Generated\Model\ContainerCreateResponse', 'json');
        }
        if (null !== $contentType && (400 === $status && false !== stripos(strtolower($contentType), 'application/json'))) {
            throw new \WebProject\DockerApi\Library\Generated\Exception\ContainerCreateBadRequestException($serializer->deserialize($body, 'WebProject\DockerApi\Library\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (null !== $contentType && (404 === $status && false !== stripos(strtolower($contentType), 'application/json'))) {
            throw new \WebProject\DockerApi\Library\Generated\Exception\ContainerCreateNotFoundException($serializer->deserialize($body, 'WebProject\DockerApi\Library\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (null !== $contentType && (409 === $status && false !== stripos(strtolower($contentType), 'application/json'))) {
            throw new \WebProject\DockerApi\Library\Generated\Exception\ContainerCreateConflictException($serializer->deserialize($body, 'WebProject\DockerApi\Library\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (null !== $contentType && (500 === $status && false !== stripos(strtolower($contentType), 'application/json'))) {
            throw new \WebProject\DockerApi\Library\Generated\Exception\ContainerCreateInternalServerErrorException($serializer->deserialize($body, 'WebProject\DockerApi\Library\Generated\Model\ErrorResponse', 'json'), $response);
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
