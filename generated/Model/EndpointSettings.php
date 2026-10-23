<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class EndpointSettings implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * EndpointIPAMConfig represents an endpoint's IPAM configuration.
     *
     * @var EndpointIPAMConfig|null
     */
    public ?EndpointIPAMConfig $iPAMConfig;
    /**
     * @var list<string>|null
     */
    public ?array $links;
    /**
     * MAC address for the endpoint on this network. The network driver might ignore this parameter.
     *
     * @var string|null
     */
    public ?string $macAddress;
    /**
     * @var list<string>|null
     */
    public ?array $aliases;
    /**
     * DriverOpts is a mapping of driver options and values. These options
     * are passed directly to the driver and are driver specific.
     *
     * @var iterable<string, string>|null
     */
    public ?iterable $driverOpts;
    /**
     * This property determines which endpoint will provide the default
     * gateway for a container. The endpoint with the highest priority will
     * be used. If multiple endpoints have the same priority, endpoints are
     * lexicographically sorted based on their network name, and the one
     * that sorts first is picked.
     *
     * @var int|null
     */
    public ?int $gwPriority;
    /**
     * Unique ID of the network.
     *
     * @var string|null
     */
    public ?string $networkID;
    /**
     * Unique ID for the service endpoint in a Sandbox.
     *
     * @var string|null
     */
    public ?string $endpointID;
    /**
     * Gateway address for this network.
     *
     * @var string|null
     */
    public ?string $gateway;
    /**
     * IPv4 address.
     *
     * @var string|null
     */
    public ?string $iPAddress;
    /**
     * Mask length of the IPv4 address.
     *
     * @var int|null
     */
    public ?int $iPPrefixLen;
    /**
     * IPv6 gateway address.
     *
     * @var string|null
     */
    public ?string $iPv6Gateway;
    /**
     * Global IPv6 address.
     *
     * @var string|null
     */
    public ?string $globalIPv6Address;
    /**
     * Mask length of the global IPv6 address.
     *
     * @var int|null
     */
    public ?int $globalIPv6PrefixLen;
    /**
     * List of all DNS names an endpoint has on a specific network. This
     * list is based on the container name, network aliases, container short
     * ID, and hostname.
     *
     * These DNS names are non-fully qualified but can contain several dots.
     * You can get fully qualified DNS names by appending `.<network-name>`.
     * For instance, if container name is `my.ctr` and the network is named
     * `testnet`, `DNSNames` will contain `my.ctr` and the FQDN will be
     * `my.ctr.testnet`.
     *
     * @var list<string>|null
     */
    public ?array $dNSNames;

    public function definedProperties(): array
    {
        return ['iPAMConfig' => 'IPAMConfig', 'links' => 'Links', 'macAddress' => 'MacAddress', 'aliases' => 'Aliases', 'driverOpts' => 'DriverOpts', 'gwPriority' => 'GwPriority', 'networkID' => 'NetworkID', 'endpointID' => 'EndpointID', 'gateway' => 'Gateway', 'iPAddress' => 'IPAddress', 'iPPrefixLen' => 'IPPrefixLen', 'iPv6Gateway' => 'IPv6Gateway', 'globalIPv6Address' => 'GlobalIPv6Address', 'globalIPv6PrefixLen' => 'GlobalIPv6PrefixLen', 'dNSNames' => 'DNSNames'];
    }
}
