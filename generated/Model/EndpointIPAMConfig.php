<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class EndpointIPAMConfig implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string|null
     */
    public ?string $iPv4Address;
    /**
     * @var string|null
     */
    public ?string $iPv6Address;
    /**
     * @var list<string>|null
     */
    public ?array $linkLocalIPs;

    public function definedProperties(): array
    {
        return ['iPv4Address' => 'IPv4Address', 'iPv6Address' => 'IPv6Address', 'linkLocalIPs' => 'LinkLocalIPs'];
    }
}
