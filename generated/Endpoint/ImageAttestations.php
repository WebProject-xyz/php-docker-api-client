<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Endpoint;

class ImageAttestations extends \WebProject\DockerApi\Library\Generated\Runtime\Client\BaseEndpoint implements \WebProject\DockerApi\Library\Generated\Runtime\Client\Endpoint
{
    use \WebProject\DockerApi\Library\Generated\Runtime\Client\EndpointTrait;
    protected $name;

    /**
     * Return the in-toto attestation statements attached to the image for the
     * given platform. The daemon locates the attestation manifest(s) that
     * reference the matching platform image manifest, reads their statement
     * layers, and returns the verbatim statement JSON together with layer
     * metadata.
     *
     * If the image has no attestations an empty array is returned.
     *
     * @param string $name Image name or id
     * @param array{
     *    "platform"?: array, //JSON-encoded OCI platform to select the image variant whose
     *                        //attestations to return.
     *                        //If omitted, the daemon's default (host) platform is used.
     *                        //
     *                        //Only one platform value is currently accepted; passing more than
     *                        //one returns an error. The parameter is declared as an array so the
     *                        //wire shape can accept multiple values in the future without an
     *                        //API version bump.
     *                        //
     *                        //Example: `{"os": "linux", "architecture": "amd64"}`
     *    "type"?: array, //In-toto predicate type URI to filter returned statements. May be
     *                    //repeated to accept any of several predicate types. If omitted, all
     *                    //statements are returned.
     *                    //
     *                    //Example: `type=https://slsa.dev/provenance/v0.2&type=https://spdx.dev/Document`
     *    "statement"?: bool, //Include the verbatim in-toto statement body in each returned
     *                        //entry. Defaults to false; when omitted or false, only the
     *                        //descriptor and predicate type are returned and statement blobs
     *                        //are not read.
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
        return str_replace(['{name}'], [rawurlencode($this->name)], '/images/{name}/attestations');
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
        $optionsResolver->setDefined(['platform', 'type', 'statement']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['statement' => false]);
        $optionsResolver->addAllowedTypes('platform', ['array']);
        $optionsResolver->addAllowedTypes('type', ['array']);
        $optionsResolver->addAllowedTypes('statement', ['bool']);

        return $optionsResolver;
    }

    protected function getQueryStyles(): array
    {
        return ['platform' => ['style' => 'form', 'explode' => true], 'type' => ['style' => 'form', 'explode' => true]];
    }

    /**
     * {@inheritdoc}
     *
     * @return \WebProject\DockerApi\Library\Generated\Model\AttestationStatement[]
     *
     * @throws \WebProject\DockerApi\Library\Generated\Exception\ImageAttestationsBadRequestException
     * @throws \WebProject\DockerApi\Library\Generated\Exception\ImageAttestationsNotFoundException
     * @throws \WebProject\DockerApi\Library\Generated\Exception\ImageAttestationsInternalServerErrorException
     * @throws \WebProject\DockerApi\Library\Generated\Exception\ImageAttestationsNotImplementedException
     * @throws \WebProject\DockerApi\Library\Generated\Exception\BadResponseException
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body   = $response->getContent(false);
        if (null !== $contentType && (200 === $status && false !== stripos(strtolower($contentType), 'application/json'))) {
            return $this->deserializeListResponse($serializer, $body, 'WebProject\DockerApi\Library\Generated\Model\AttestationStatement[]', 'json');
        }
        if (null !== $contentType && (400 === $status && false !== stripos(strtolower($contentType), 'application/json'))) {
            throw new \WebProject\DockerApi\Library\Generated\Exception\ImageAttestationsBadRequestException($serializer->deserialize($body, 'WebProject\DockerApi\Library\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (null !== $contentType && (404 === $status && false !== stripos(strtolower($contentType), 'application/json'))) {
            throw new \WebProject\DockerApi\Library\Generated\Exception\ImageAttestationsNotFoundException($serializer->deserialize($body, 'WebProject\DockerApi\Library\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (null !== $contentType && (500 === $status && false !== stripos(strtolower($contentType), 'application/json'))) {
            throw new \WebProject\DockerApi\Library\Generated\Exception\ImageAttestationsInternalServerErrorException($serializer->deserialize($body, 'WebProject\DockerApi\Library\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (null !== $contentType && (501 === $status && false !== stripos(strtolower($contentType), 'application/json'))) {
            throw new \WebProject\DockerApi\Library\Generated\Exception\ImageAttestationsNotImplementedException($serializer->deserialize($body, 'WebProject\DockerApi\Library\Generated\Model\ErrorResponse', 'json'), $response);
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
