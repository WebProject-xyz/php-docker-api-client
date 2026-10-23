<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ServiceEndpoint implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Properties that can be configured to access and load balance a service.
     *
     * @var EndpointSpec
     */
    public EndpointSpec $spec;
    /**
     * @var list<EndpointPortConfig>|null
     */
    public ?array $ports;
    /**
     * @var list<ServiceEndpointVirtualIPsItem>|null
     */
    public ?array $virtualIPs;

    public function definedProperties(): array
    {
        return ['spec' => 'Spec', 'ports' => 'Ports', 'virtualIPs' => 'VirtualIPs'];
    }
}
