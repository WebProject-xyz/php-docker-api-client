<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class NetworksCreatePostBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The network's name.
     *
     * @var string
     */
    public string $name;
    /**
     * Name of the network driver plugin to use.
     *
     * @var string
     */
    public string $driver = 'bridge';
    /**
     * The level at which the network exists (e.g. `swarm` for cluster-wide
     * or `local` for machine level).
     *
     * @var string
     */
    public string $scope;
    /**
     * Restrict external access to the network.
     *
     * @var bool
     */
    public bool $internal;
    /**
     * Globally scoped network is manually attachable by regular
     * containers from workers in swarm mode.
     *
     * @var bool
     */
    public bool $attachable;
    /**
     * Ingress network is the network which provides the routing-mesh
     * in swarm mode.
     *
     * @var bool
     */
    public bool $ingress;
    /**
     * Creates a config-only network. Config-only networks are placeholder
     * networks for network configurations to be used by other networks.
     * Config-only networks cannot be used directly to run containers
     * or services.
     *
     * @var bool
     */
    public bool $configOnly = false;
    /**
     * The config-only network source to provide the configuration for
     * this network.
     *
     * @var ConfigReference
     */
    public ConfigReference $configFrom;
    /**
     * @var IPAM
     */
    public IPAM $iPAM;
    /**
     * Enable IPv4 on the network.
     *
     * @var bool
     */
    public bool $enableIPv4;
    /**
     * Enable IPv6 on the network.
     *
     * @var bool
     */
    public bool $enableIPv6;
    /**
     * Network specific options to be used by the drivers.
     *
     * @var iterable<string, string>
     */
    public iterable $options;
    /**
     * User-defined key/value metadata.
     *
     * @var iterable<string, string>
     */
    public iterable $labels;

    public function definedProperties(): array
    {
        return ['name' => 'Name', 'driver' => 'Driver', 'scope' => 'Scope', 'internal' => 'Internal', 'attachable' => 'Attachable', 'ingress' => 'Ingress', 'configOnly' => 'ConfigOnly', 'configFrom' => 'ConfigFrom', 'iPAM' => 'IPAM', 'enableIPv4' => 'EnableIPv4', 'enableIPv6' => 'EnableIPv6', 'options' => 'Options', 'labels' => 'Labels'];
    }
}
