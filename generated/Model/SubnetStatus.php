<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class SubnetStatus implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Number of IP addresses in the subnet that are in use or reserved and are therefore unavailable for allocation, saturating at 2<sup>64</sup> - 1.
     *
     * @var int|null
     */
    public ?int $iPsInUse;
    /**
     * Number of IP addresses within the network's IPRange for the subnet that are available for allocation, saturating at 2<sup>64</sup> - 1.
     *
     * @var int|null
     */
    public ?int $dynamicIPsAvailable;

    public function definedProperties(): array
    {
        return ['iPsInUse' => 'IPsInUse', 'dynamicIPsAvailable' => 'DynamicIPsAvailable'];
    }
}
