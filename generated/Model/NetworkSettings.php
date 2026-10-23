<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class NetworkSettings implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * SandboxID uniquely represents a container's network stack.
     *
     * @var string|null
     */
    public ?string $sandboxID;
    /**
     * SandboxKey is the full path of the netns handle.
     *
     * @var string|null
     */
    public ?string $sandboxKey;
    /**
     * PortMap describes the mapping of container ports to host ports, using the
     * container's port-number and protocol as key in the format `<port>/<protocol>`,
     * for example, `80/udp`.
     *
     * If a container's port is mapped for multiple protocols, separate entries
     * are added to the mapping table.
     *
     * @var iterable<string, list<PortBinding>>|null
     */
    public ?iterable $ports;
    /**
     * Information about all networks that the container is connected to.
     *
     * @var iterable<string, EndpointSettings>
     */
    public iterable $networks;

    public function definedProperties(): array
    {
        return ['sandboxID' => 'SandboxID', 'sandboxKey' => 'SandboxKey', 'ports' => 'Ports', 'networks' => 'Networks'];
    }
}
