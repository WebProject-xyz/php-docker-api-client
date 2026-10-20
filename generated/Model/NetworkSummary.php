<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use DateTimeInterface;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class NetworkSummary implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Name of the network.
     *
     * @var string|null
     */
    public ?string $name;
    /**
     * ID that uniquely identifies a network on a single machine.
     *
     * @var string|null
     */
    public ?string $id;
    /**
     * Date and time at which the network was created in
     * [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
     *
     * @var DateTimeInterface|null
     */
    public ?DateTimeInterface $created;
    /**
     * The level at which the network exists (e.g. `swarm` for cluster-wide
     * or `local` for machine level).
     *
     * @var string|null
     */
    public ?string $scope;
    /**
     * The name of the driver used to create the network (e.g. `bridge`,
     * `overlay`).
     *
     * @var string|null
     */
    public ?string $driver;
    /**
     * Whether the network was created with IPv4 enabled.
     *
     * @var bool|null
     */
    public ?bool $enableIPv4;
    /**
     * Whether the network was created with IPv6 enabled.
     *
     * @var bool|null
     */
    public ?bool $enableIPv6;
    /**
     * @var IPAM
     */
    public IPAM $iPAM;
    /**
     * Whether the network is created to only allow internal networking
     * connectivity.
     *
     * @var bool
     */
    public bool $internal = false;
    /**
     * Whether a global / swarm scope network is manually attachable by regular
     * containers from workers in swarm mode.
     *
     * @var bool
     */
    public bool $attachable = false;
    /**
     * Whether the network is providing the routing-mesh for the swarm cluster.
     *
     * @var bool
     */
    public bool $ingress = false;
    /**
     * The config-only network source to provide the configuration for
     * this network.
     *
     * @var ConfigReference
     */
    public ConfigReference $configFrom;
    /**
     * Whether the network is a config-only network. Config-only networks are
     * placeholder networks for network configurations to be used by other
     * networks. Config-only networks cannot be used directly to run containers
     * or services.
     *
     * @var bool
     */
    public bool $configOnly = false;
    /**
     * Network-specific options uses when creating the network.
     *
     * @var iterable<string, string>|null
     */
    public ?iterable $options;
    /**
     * Metadata specific to the network being created.
     *
     * @var iterable<string, string>|null
     */
    public ?iterable $labels;
    /**
     * List of peer nodes for an overlay network. This field is only present
     * for overlay networks, and omitted for other network types.
     *
     * @var list<PeerInfo>|null
     */
    public ?array $peers;

    public function definedProperties(): array
    {
        return ['name' => 'Name', 'id' => 'Id', 'created' => 'Created', 'scope' => 'Scope', 'driver' => 'Driver', 'enableIPv4' => 'EnableIPv4', 'enableIPv6' => 'EnableIPv6', 'iPAM' => 'IPAM', 'internal' => 'Internal', 'attachable' => 'Attachable', 'ingress' => 'Ingress', 'configFrom' => 'ConfigFrom', 'configOnly' => 'ConfigOnly', 'options' => 'Options', 'labels' => 'Labels', 'peers' => 'Peers'];
    }
}
