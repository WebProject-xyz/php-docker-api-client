<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class EndpointResource implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string|null
     */
    public ?string $name;
    /**
     * @var string|null
     */
    public ?string $endpointID;
    /**
     * @var string|null
     */
    public ?string $macAddress;
    /**
     * @var string|null
     */
    public ?string $iPv4Address;
    /**
     * @var string|null
     */
    public ?string $iPv6Address;

    public function definedProperties(): array
    {
        return ['name' => 'Name', 'endpointID' => 'EndpointID', 'macAddress' => 'MacAddress', 'iPv4Address' => 'IPv4Address', 'iPv6Address' => 'IPv6Address'];
    }
}
