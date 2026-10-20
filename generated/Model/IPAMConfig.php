<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class IPAMConfig implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string|null
     */
    public ?string $subnet;
    /**
     * @var string|null
     */
    public ?string $iPRange;
    /**
     * @var string|null
     */
    public ?string $gateway;
    /**
     * @var iterable<string, string>|null
     */
    public ?iterable $auxiliaryAddresses;

    public function definedProperties(): array
    {
        return ['subnet' => 'Subnet', 'iPRange' => 'IPRange', 'gateway' => 'Gateway', 'auxiliaryAddresses' => 'AuxiliaryAddresses'];
    }
}
