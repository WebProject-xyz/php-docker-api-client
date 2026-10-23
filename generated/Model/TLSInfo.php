<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class TLSInfo implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The root CA certificate(s) that are used to validate leaf TLS
     * certificates.
     *
     * @var string|null
     */
    public ?string $trustRoot;
    /**
     * The base64-url-safe-encoded raw subject bytes of the issuer.
     *
     * @var string|null
     */
    public ?string $certIssuerSubject;
    /**
     * The base64-url-safe-encoded raw public key bytes of the issuer.
     *
     * @var string|null
     */
    public ?string $certIssuerPublicKey;

    public function definedProperties(): array
    {
        return ['trustRoot' => 'TrustRoot', 'certIssuerSubject' => 'CertIssuerSubject', 'certIssuerPublicKey' => 'CertIssuerPublicKey'];
    }
}
