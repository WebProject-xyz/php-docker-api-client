<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use ArrayObject;
use function array_key_exists;

class NetworkingConfig extends ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * A mapping of network name to endpoint configuration for that network.
     * The endpoint configuration can be left empty to connect to that
     * network with no particular endpoint configuration.
     *
     * @var array<string, EndpointSettings>
     */
    protected $endpointsConfig;

    /**
     * A mapping of network name to endpoint configuration for that network.
     * The endpoint configuration can be left empty to connect to that
     * network with no particular endpoint configuration.
     *
     * @return array<string, EndpointSettings>
     */
    public function getEndpointsConfig(): iterable
    {
        return $this->endpointsConfig;
    }

    /**
     * A mapping of network name to endpoint configuration for that network.
     * The endpoint configuration can be left empty to connect to that
     * network with no particular endpoint configuration.
     *
     * @param array<string, EndpointSettings> $endpointsConfig
     *
     * @return self
     */
    public function setEndpointsConfig(iterable $endpointsConfig): self
    {
        $this->initialized['endpointsConfig'] = true;
        $this->endpointsConfig                = $endpointsConfig;

        return $this;
    }
}
