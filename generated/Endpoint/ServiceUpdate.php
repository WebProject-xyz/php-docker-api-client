<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Endpoint;

class ServiceUpdate extends \WebProject\DockerApi\Library\Generated\Runtime\Client\BaseEndpoint implements \WebProject\DockerApi\Library\Generated\Runtime\Client\Endpoint
{
    use \WebProject\DockerApi\Library\Generated\Runtime\Client\EndpointTrait;
    protected $id;

    /**
     * @param string                                                                 $id          ID or name of service
     * @param \WebProject\DockerApi\Library\Generated\Model\ServicesIdUpdatePostBody $requestBody
     * @param array{
     *    "version": int, //The version number of the service object being updated. This is
     *                    //required to avoid conflicting writes.
     *                    //This version number should be the value as currently set on the
     *                    //service *before* the update. You can find the current version by
     *                    //calling `GET /services/{id}`
     *    "registryAuthFrom"?: string, //If the `X-Registry-Auth` header is not specified, this parameter
     *                                 //indicates where to find registry authorization credentials.
     *    "rollback"?: string, //Set to this parameter to `previous` to cause a server-side rollback
     *                         //to the previous service spec. The supplied spec will be ignored in
     *                         //this case.
     * } $queryParameters
     * @param array{
     *    "X-Registry-Auth"?: string, //A base64url-encoded auth configuration for pulling from private
     *                                //registries.
     *                                //
     *                                //Refer to the [authentication section](#section/Authentication) for
     *                                //details.
     * } $headerParameters
     */
    public function __construct(string $id, \WebProject\DockerApi\Library\Generated\Model\ServicesIdUpdatePostBody $requestBody, array $queryParameters, array $headerParameters = [])
    {
        $this->id               = $id;
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
        return str_replace(['{id}'], [rawurlencode($this->id)], '/services/{id}/update');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        if ($this->body instanceof \WebProject\DockerApi\Library\Generated\Model\ServicesIdUpdatePostBody) {
            return [['Content-Type' => ['application/json']], \WebProject\DockerApi\Library\Generated\Runtime\Client\JsonPayload::encode($serializer, $this->body)];
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
        $optionsResolver->setDefined(['version', 'registryAuthFrom', 'rollback']);
        $optionsResolver->setRequired(['version']);
        $optionsResolver->setDefaults(['registryAuthFrom' => 'spec']);
        $optionsResolver->addAllowedTypes('version', ['int']);
        $optionsResolver->addAllowedTypes('registryAuthFrom', ['string']);
        $optionsResolver->addAllowedTypes('rollback', ['string']);

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
     * @return \WebProject\DockerApi\Library\Generated\Model\ServiceUpdateResponse
     *
     * @throws \WebProject\DockerApi\Library\Generated\Exception\ServiceUpdateBadRequestException
     * @throws \WebProject\DockerApi\Library\Generated\Exception\ServiceUpdateNotFoundException
     * @throws \WebProject\DockerApi\Library\Generated\Exception\ServiceUpdateInternalServerErrorException
     * @throws \WebProject\DockerApi\Library\Generated\Exception\ServiceUpdateServiceUnavailableException
     * @throws \WebProject\DockerApi\Library\Generated\Exception\BadResponseException
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body   = $response->getContent(false);
        if (null !== $contentType && (200 === $status && false !== stripos(strtolower($contentType), 'application/json'))) {
            return $serializer->deserialize($body, 'WebProject\DockerApi\Library\Generated\Model\ServiceUpdateResponse', 'json');
        }
        if (null !== $contentType && (400 === $status && false !== stripos(strtolower($contentType), 'application/json'))) {
            throw new \WebProject\DockerApi\Library\Generated\Exception\ServiceUpdateBadRequestException($serializer->deserialize($body, 'WebProject\DockerApi\Library\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (null !== $contentType && (404 === $status && false !== stripos(strtolower($contentType), 'application/json'))) {
            throw new \WebProject\DockerApi\Library\Generated\Exception\ServiceUpdateNotFoundException($serializer->deserialize($body, 'WebProject\DockerApi\Library\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (null !== $contentType && (500 === $status && false !== stripos(strtolower($contentType), 'application/json'))) {
            throw new \WebProject\DockerApi\Library\Generated\Exception\ServiceUpdateInternalServerErrorException($serializer->deserialize($body, 'WebProject\DockerApi\Library\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (null !== $contentType && (503 === $status && false !== stripos(strtolower($contentType), 'application/json'))) {
            throw new \WebProject\DockerApi\Library\Generated\Exception\ServiceUpdateServiceUnavailableException($serializer->deserialize($body, 'WebProject\DockerApi\Library\Generated\Model\ErrorResponse', 'json'), $response);
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
