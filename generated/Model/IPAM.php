<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class IPAM implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Name of the IPAM driver to use.
     *
     * @var string|null
     */
    public ?string $driver = 'default';
    /**
     * List of IPAM configuration options, specified as a map:
     *
     * ```
     * {"Subnet": <CIDR>, "IPRange": <CIDR>, "Gateway": <IP address>, "AuxAddress": <device_name:IP address>}
     * ```
     *
     * @var list<IPAMConfig>|null
     */
    public ?array $config;
    /**
     * Driver-specific options, specified as a map.
     *
     * @var iterable<string, string>|null
     */
    public ?iterable $options;

    public function definedProperties(): array
    {
        return ['driver' => 'Driver', 'config' => 'Config', 'options' => 'Options'];
    }
}
