<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class NetworkConnectRequest implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The ID or name of the container to connect to the network.
     *
     * @var string
     */
    public string $container;
    /**
     * Configuration for a network endpoint.
     *
     * @var EndpointSettings
     */
    public EndpointSettings $endpointConfig;

    public function definedProperties(): array
    {
        return ['container' => 'Container', 'endpointConfig' => 'EndpointConfig'];
    }
}
