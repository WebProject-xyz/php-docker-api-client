<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class SwarmSpecCAConfigExternalCAsItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Protocol for communication with the external CA (currently
     * only `cfssl` is supported).
     *
     * @var string|null
     */
    public ?string $protocol = 'cfssl';
    /**
     * URL where certificate signing requests should be sent.
     *
     * @var string|null
     */
    public ?string $uRL;
    /**
     * An object with key/value pairs that are interpreted as
     * protocol-specific options for the external CA driver.
     *
     * @var iterable<string, string>|null
     */
    public ?iterable $options;
    /**
     * The root CA certificate (in PEM format) this external CA uses
     * to issue TLS certificates (assumed to be to the current swarm
     * root CA certificate if not provided).
     *
     * @var string|null
     */
    public ?string $cACert;

    public function definedProperties(): array
    {
        return ['protocol' => 'Protocol', 'uRL' => 'URL', 'options' => 'Options', 'cACert' => 'CACert'];
    }
}
