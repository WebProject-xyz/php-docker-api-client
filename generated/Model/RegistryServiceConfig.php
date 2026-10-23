<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class RegistryServiceConfig implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * List of IP ranges of insecure registries, using the CIDR syntax
     * ([RFC 4632](https://tools.ietf.org/html/4632)). Insecure registries
     * accept un-encrypted (HTTP) and/or untrusted (HTTPS with certificates
     * from unknown CAs) communication.
     *
     * By default, local registries (`::1/128` and `127.0.0.0/8`) are configured as
     * insecure. All other registries are secure. Communicating with an
     * insecure registry is not possible if the daemon assumes that registry
     * is secure.
     *
     * This configuration override this behavior, insecure communication with
     * registries whose resolved IP address is within the subnet described by
     * the CIDR syntax.
     *
     * Registries can also be marked insecure by hostname. Those registries
     * are listed under `IndexConfigs` and have their `Secure` field set to
     * `false`.
     *
     * > **Warning**: Using this option can be useful when running a local
     * > registry, but introduces security vulnerabilities. This option
     * > should therefore ONLY be used for testing purposes. For increased
     * > security, users should add their CA to their system's list of trusted
     * > CAs instead of enabling this option.
     *
     * @var list<string>|null
     */
    public ?array $insecureRegistryCIDRs;
    /**
     * @var iterable<string, IndexInfo>
     */
    public iterable $indexConfigs;
    /**
     * List of registry URLs that act as a mirror for the official
     * (`docker.io`) registry.
     *
     * @var list<string>|null
     */
    public ?array $mirrors;

    public function definedProperties(): array
    {
        return ['insecureRegistryCIDRs' => 'InsecureRegistryCIDRs', 'indexConfigs' => 'IndexConfigs', 'mirrors' => 'Mirrors'];
    }
}
