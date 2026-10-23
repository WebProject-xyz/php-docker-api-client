<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class SwarmSpecCAConfig implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The duration node certificates are issued for.
     *
     * @var int|null
     */
    public ?int $nodeCertExpiry;
    /**
     * Configuration for forwarding signing requests to an external
     * certificate authority.
     *
     * @var list<SwarmSpecCAConfigExternalCAsItem>|null
     */
    public ?array $externalCAs;
    /**
     * The desired signing CA certificate for all swarm node TLS leaf
     * certificates, in PEM format.
     *
     * @var string|null
     */
    public ?string $signingCACert;
    /**
     * The desired signing CA key for all swarm node TLS leaf certificates,
     * in PEM format.
     *
     * @var string|null
     */
    public ?string $signingCAKey;
    /**
     * An integer whose purpose is to force swarm to generate a new
     * signing CA certificate and key, if none have been specified in
     * `SigningCACert` and `SigningCAKey`.
     *
     * @var int|null
     */
    public ?int $forceRotate;

    public function definedProperties(): array
    {
        return ['nodeCertExpiry' => 'NodeCertExpiry', 'externalCAs' => 'ExternalCAs', 'signingCACert' => 'SigningCACert', 'signingCAKey' => 'SigningCAKey', 'forceRotate' => 'ForceRotate'];
    }
}
