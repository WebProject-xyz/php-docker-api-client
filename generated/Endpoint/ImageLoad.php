<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Endpoint;

use function is_resource;
use function is_string;

class ImageLoad extends \WebProject\DockerApi\Library\Generated\Runtime\Client\BaseEndpoint implements \WebProject\DockerApi\Library\Generated\Runtime\Client\Endpoint
{
    use \WebProject\DockerApi\Library\Generated\Runtime\Client\EndpointTrait;

    /**
     * Load a set of images and tags into a repository.
     *
     * For details on the format, see the [export image endpoint](#operation/ImageGet).
     *
     * @param string|resource|null $requestBody
     * @param array{
     *    "quiet"?: bool, //Suppress progress details during load.
     *    "platform"?: array, //JSON encoded OCI platform(s) which will be used to select the
     *                        //platform-specific image(s) to load if the image is
     *                        //multi-platform. If not provided, the full multi-platform image
     *                        //will be loaded.
     *                        //
     *                        //Example: `{"os": "linux", "architecture": "arm", "variant": "v5"}`
     * } $queryParameters
     */
    public function __construct($requestBody = null, array $queryParameters = [])
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
        return '/images/load';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        if (is_string($this->body) || is_resource($this->body)) {
            return [['Content-Type' => ['application/x-tar']], $this->body];
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
        $optionsResolver->setDefined(['quiet', 'platform']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['quiet' => false]);
        $optionsResolver->addAllowedTypes('quiet', ['bool']);
        $optionsResolver->addAllowedTypes('platform', ['array']);

        return $optionsResolver;
    }

    protected function getQueryStyles(): array
    {
        return ['platform' => ['style' => 'form', 'explode' => true]];
    }

    /**
     * {@inheritdoc}
     *
     * @return null
     *
     * @throws \WebProject\DockerApi\Library\Generated\Exception\ImageLoadInternalServerErrorException
     * @throws \WebProject\DockerApi\Library\Generated\Exception\BadResponseException
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body   = $response->getContent(false);
        if (200 === $status) {
            return null;
        }
        if (null !== $contentType && (500 === $status && false !== stripos(strtolower($contentType), 'application/json'))) {
            throw new \WebProject\DockerApi\Library\Generated\Exception\ImageLoadInternalServerErrorException($serializer->deserialize($body, 'WebProject\DockerApi\Library\Generated\Model\ErrorResponse', 'json'), $response);
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
