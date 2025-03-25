<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use ArrayObject;
use function array_key_exists;

class NetworksCreatePostBody extends ArrayObject
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
     * The network's name.
     *
     * @var string
     */
    protected $name;
    /**
     * Name of the network driver plugin to use.
     *
     * @var string
     */
    protected $driver = 'bridge';
    /**
     * The level at which the network exists (e.g. `swarm` for cluster-wide
     * or `local` for machine level).
     *
     * @var string
     */
    protected $scope;
    /**
     * Restrict external access to the network.
     *
     * @var bool
     */
    protected $internal;
    /**
     * Globally scoped network is manually attachable by regular
     * containers from workers in swarm mode.
     *
     * @var bool
     */
    protected $attachable;
    /**
     * Ingress network is the network which provides the routing-mesh
     * in swarm mode.
     *
     * @var bool
     */
    protected $ingress;
    /**
     * Creates a config-only network. Config-only networks are placeholder
     * networks for network configurations to be used by other networks.
     * Config-only networks cannot be used directly to run containers
     * or services.
     *
     * @var bool
     */
    protected $configOnly = false;
    /**
     * The config-only network source to provide the configuration for
     * this network.
     *
     * @var ConfigReference
     */
    protected $configFrom;
    /**
     * @var IPAM
     */
    protected $iPAM;
    /**
     * Enable IPv4 on the network.
     *
     * @var bool
     */
    protected $enableIPv4;
    /**
     * Enable IPv6 on the network.
     *
     * @var bool
     */
    protected $enableIPv6;
    /**
     * Network specific options to be used by the drivers.
     *
     * @var array<string, string>
     */
    protected $options;
    /**
     * User-defined key/value metadata.
     *
     * @var array<string, string>
     */
    protected $labels;

    /**
     * The network's name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * The network's name.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name                = $name;

        return $this;
    }

    /**
     * Name of the network driver plugin to use.
     *
     * @return string
     */
    public function getDriver(): string
    {
        return $this->driver;
    }

    /**
     * Name of the network driver plugin to use.
     *
     * @param string $driver
     *
     * @return self
     */
    public function setDriver(string $driver): self
    {
        $this->initialized['driver'] = true;
        $this->driver                = $driver;

        return $this;
    }

    /**
     * The level at which the network exists (e.g. `swarm` for cluster-wide
     * or `local` for machine level).
     *
     * @return string
     */
    public function getScope(): string
    {
        return $this->scope;
    }

    /**
     * The level at which the network exists (e.g. `swarm` for cluster-wide
     * or `local` for machine level).
     *
     * @param string $scope
     *
     * @return self
     */
    public function setScope(string $scope): self
    {
        $this->initialized['scope'] = true;
        $this->scope                = $scope;

        return $this;
    }

    /**
     * Restrict external access to the network.
     *
     * @return bool
     */
    public function getInternal(): bool
    {
        return $this->internal;
    }

    /**
     * Restrict external access to the network.
     *
     * @param bool $internal
     *
     * @return self
     */
    public function setInternal(bool $internal): self
    {
        $this->initialized['internal'] = true;
        $this->internal                = $internal;

        return $this;
    }

    /**
     * Globally scoped network is manually attachable by regular
     * containers from workers in swarm mode.
     *
     * @return bool
     */
    public function getAttachable(): bool
    {
        return $this->attachable;
    }

    /**
     * Globally scoped network is manually attachable by regular
     * containers from workers in swarm mode.
     *
     * @param bool $attachable
     *
     * @return self
     */
    public function setAttachable(bool $attachable): self
    {
        $this->initialized['attachable'] = true;
        $this->attachable                = $attachable;

        return $this;
    }

    /**
     * Ingress network is the network which provides the routing-mesh
     * in swarm mode.
     *
     * @return bool
     */
    public function getIngress(): bool
    {
        return $this->ingress;
    }

    /**
     * Ingress network is the network which provides the routing-mesh
     * in swarm mode.
     *
     * @param bool $ingress
     *
     * @return self
     */
    public function setIngress(bool $ingress): self
    {
        $this->initialized['ingress'] = true;
        $this->ingress                = $ingress;

        return $this;
    }

    /**
     * Creates a config-only network. Config-only networks are placeholder
     * networks for network configurations to be used by other networks.
     * Config-only networks cannot be used directly to run containers
     * or services.
     *
     * @return bool
     */
    public function getConfigOnly(): bool
    {
        return $this->configOnly;
    }

    /**
     * Creates a config-only network. Config-only networks are placeholder
     * networks for network configurations to be used by other networks.
     * Config-only networks cannot be used directly to run containers
     * or services.
     *
     * @param bool $configOnly
     *
     * @return self
     */
    public function setConfigOnly(bool $configOnly): self
    {
        $this->initialized['configOnly'] = true;
        $this->configOnly                = $configOnly;

        return $this;
    }

    /**
     * The config-only network source to provide the configuration for
     * this network.
     *
     * @return ConfigReference
     */
    public function getConfigFrom(): ConfigReference
    {
        return $this->configFrom;
    }

    /**
     * The config-only network source to provide the configuration for
     * this network.
     *
     * @param ConfigReference $configFrom
     *
     * @return self
     */
    public function setConfigFrom(ConfigReference $configFrom): self
    {
        $this->initialized['configFrom'] = true;
        $this->configFrom                = $configFrom;

        return $this;
    }

    /**
     * @return IPAM
     */
    public function getIPAM(): IPAM
    {
        return $this->iPAM;
    }

    /**
     * @param IPAM $iPAM
     *
     * @return self
     */
    public function setIPAM(IPAM $iPAM): self
    {
        $this->initialized['iPAM'] = true;
        $this->iPAM                = $iPAM;

        return $this;
    }

    /**
     * Enable IPv4 on the network.
     *
     * @return bool
     */
    public function getEnableIPv4(): bool
    {
        return $this->enableIPv4;
    }

    /**
     * Enable IPv4 on the network.
     *
     * @param bool $enableIPv4
     *
     * @return self
     */
    public function setEnableIPv4(bool $enableIPv4): self
    {
        $this->initialized['enableIPv4'] = true;
        $this->enableIPv4                = $enableIPv4;

        return $this;
    }

    /**
     * Enable IPv6 on the network.
     *
     * @return bool
     */
    public function getEnableIPv6(): bool
    {
        return $this->enableIPv6;
    }

    /**
     * Enable IPv6 on the network.
     *
     * @param bool $enableIPv6
     *
     * @return self
     */
    public function setEnableIPv6(bool $enableIPv6): self
    {
        $this->initialized['enableIPv6'] = true;
        $this->enableIPv6                = $enableIPv6;

        return $this;
    }

    /**
     * Network specific options to be used by the drivers.
     *
     * @return array<string, string>
     */
    public function getOptions(): iterable
    {
        return $this->options;
    }

    /**
     * Network specific options to be used by the drivers.
     *
     * @param array<string, string> $options
     *
     * @return self
     */
    public function setOptions(iterable $options): self
    {
        $this->initialized['options'] = true;
        $this->options                = $options;

        return $this;
    }

    /**
     * User-defined key/value metadata.
     *
     * @return array<string, string>
     */
    public function getLabels(): iterable
    {
        return $this->labels;
    }

    /**
     * User-defined key/value metadata.
     *
     * @param array<string, string> $labels
     *
     * @return self
     */
    public function setLabels(iterable $labels): self
    {
        $this->initialized['labels'] = true;
        $this->labels                = $labels;

        return $this;
    }
}
