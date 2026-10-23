<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Endpoint;

use function is_array;

class PluginUpgrade extends \WebProject\DockerApi\Library\Generated\Runtime\Client\BaseEndpoint implements \WebProject\DockerApi\Library\Generated\Runtime\Client\Endpoint
{
    use \WebProject\DockerApi\Library\Generated\Runtime\Client\EndpointTrait;
    protected $name;
    protected $accept;

    /**
     * @param string                                                               $name        The name of the plugin. The `:latest` tag is optional, and is the
     *                                                                                          default if omitted.
     * @param \WebProject\DockerApi\Library\Generated\Model\PluginPrivilege[]|null $requestBody
     * @param array{
     *    "remote": string, //Remote reference to upgrade to.
     *                      //
     *                      //The `:latest` tag is optional, and is used as the default if omitted.
     * } $queryParameters
     * @param array{
     *    "X-Registry-Auth"?: string, //A base64url-encoded auth configuration to use when pulling a plugin
     *                                //from a registry.
     *                                //
     *                                //Refer to the [authentication section](#section/Authentication) for
     *                                //details.
     * } $headerParameters
     * @param array $accept Accept content header application/json|text/plain
     */
    public function __construct(string $name, ?array $requestBody, array $queryParameters, array $headerParameters = [], array $accept = [])
    {
        $this->name             = $name;
        $this->body             = $requestBody;
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
        return str_replace(['{name}'], [rawurlencode($this->name)], '/plugins/{name}/upgrade');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        if (is_array($this->body) && isset($this->body[0]) && $this->body[0] instanceof \WebProject\DockerApi\Library\Generated\Model\PluginPrivilege) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        if (is_array($this->body) && isset($this->body[0]) && $this->body[0] instanceof \WebProject\DockerApi\Library\Generated\Model\PluginPrivilege) {
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
        $optionsResolver->setDefined(['remote']);
        $optionsResolver->setRequired(['remote']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('remote', ['string']);

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
     * @throws \WebProject\DockerApi\Library\Generated\Exception\PluginUpgradeNotFoundException
     * @throws \WebProject\DockerApi\Library\Generated\Exception\PluginUpgradeInternalServerErrorException
     * @throws \WebProject\DockerApi\Library\Generated\Exception\BadResponseException
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body   = $response->getContent(false);
        if (204 === $status) {
            return null;
        }
        if (null !== $contentType && (404 === $status && false !== stripos(strtolower($contentType), 'application/json'))) {
            throw new \WebProject\DockerApi\Library\Generated\Exception\PluginUpgradeNotFoundException($serializer->deserialize($body, 'WebProject\DockerApi\Library\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (null !== $contentType && (500 === $status && false !== stripos(strtolower($contentType), 'application/json'))) {
            throw new \WebProject\DockerApi\Library\Generated\Exception\PluginUpgradeInternalServerErrorException($serializer->deserialize($body, 'WebProject\DockerApi\Library\Generated\Model\ErrorResponse', 'json'), $response);
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
