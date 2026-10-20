<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Endpoint;

class ServiceCreate extends \WebProject\DockerApi\Library\Generated\Runtime\Client\BaseEndpoint implements \WebProject\DockerApi\Library\Generated\Runtime\Client\Endpoint
{
    use \WebProject\DockerApi\Library\Generated\Runtime\Client\EndpointTrait;

    /**
     * @param \WebProject\DockerApi\Library\Generated\Model\ServicesCreatePostBody $requestBody
     * @param array{
     *    "X-Registry-Auth"?: string, //A base64url-encoded auth configuration for pulling from private
     *                                //registries.
     *                                //
     *                                //Refer to the [authentication section](#section/Authentication) for
     *                                //details.
     * } $headerParameters
     */
    public function __construct(\WebProject\DockerApi\Library\Generated\Model\ServicesCreatePostBody $requestBody, array $headerParameters = [])
    {
        $this->body             = $requestBody;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/services/create';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        if ($this->body instanceof \WebProject\DockerApi\Library\Generated\Model\ServicesCreatePostBody) {
            return [['Content-Type' => ['application/json']], \WebProject\DockerApi\Library\Generated\Runtime\Client\JsonPayload::encode($serializer, $this->body)];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
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
     * @return \WebProject\DockerApi\Library\Generated\Model\ServiceCreateResponse
     *
     * @throws \WebProject\DockerApi\Library\Generated\Exception\ServiceCreateBadRequestException
     * @throws \WebProject\DockerApi\Library\Generated\Exception\ServiceCreateForbiddenException
     * @throws \WebProject\DockerApi\Library\Generated\Exception\ServiceCreateConflictException
     * @throws \WebProject\DockerApi\Library\Generated\Exception\ServiceCreateInternalServerErrorException
     * @throws \WebProject\DockerApi\Library\Generated\Exception\ServiceCreateServiceUnavailableException
     * @throws \WebProject\DockerApi\Library\Generated\Exception\BadResponseException
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body   = $response->getContent(false);
        if (null !== $contentType && (201 === $status && false !== stripos(strtolower($contentType), 'application/json'))) {
            return $serializer->deserialize($body, 'WebProject\DockerApi\Library\Generated\Model\ServiceCreateResponse', 'json');
        }
        if (null !== $contentType && (400 === $status && false !== stripos(strtolower($contentType), 'application/json'))) {
            throw new \WebProject\DockerApi\Library\Generated\Exception\ServiceCreateBadRequestException($serializer->deserialize($body, 'WebProject\DockerApi\Library\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (null !== $contentType && (403 === $status && false !== stripos(strtolower($contentType), 'application/json'))) {
            throw new \WebProject\DockerApi\Library\Generated\Exception\ServiceCreateForbiddenException($serializer->deserialize($body, 'WebProject\DockerApi\Library\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (null !== $contentType && (409 === $status && false !== stripos(strtolower($contentType), 'application/json'))) {
            throw new \WebProject\DockerApi\Library\Generated\Exception\ServiceCreateConflictException($serializer->deserialize($body, 'WebProject\DockerApi\Library\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (null !== $contentType && (500 === $status && false !== stripos(strtolower($contentType), 'application/json'))) {
            throw new \WebProject\DockerApi\Library\Generated\Exception\ServiceCreateInternalServerErrorException($serializer->deserialize($body, 'WebProject\DockerApi\Library\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (null !== $contentType && (503 === $status && false !== stripos(strtolower($contentType), 'application/json'))) {
            throw new \WebProject\DockerApi\Library\Generated\Exception\ServiceCreateServiceUnavailableException($serializer->deserialize($body, 'WebProject\DockerApi\Library\Generated\Model\ErrorResponse', 'json'), $response);
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
