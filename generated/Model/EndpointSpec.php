<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class EndpointSpec implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The mode of resolution to use for internal load balancing between tasks.
     *
     * @var string|null
     */
    public ?string $mode = 'vip';
    /**
     * List of exposed ports that this service is accessible on from the
     * outside. Ports can only be provided if `vip` resolution mode is used.
     *
     * @var list<EndpointPortConfig>|null
     */
    public ?array $ports;

    public function definedProperties(): array
    {
        return ['mode' => 'Mode', 'ports' => 'Ports'];
    }
}
