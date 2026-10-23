<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class NetworkingConfig implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A mapping of network name to endpoint configuration for that network.
     * The endpoint configuration can be left empty to connect to that
     * network with no particular endpoint configuration.
     *
     * @var iterable<string, EndpointSettings>
     */
    public iterable $endpointsConfig;

    public function definedProperties(): array
    {
        return ['endpointsConfig' => 'EndpointsConfig'];
    }
}
