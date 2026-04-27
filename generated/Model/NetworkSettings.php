<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use function array_key_exists;

class NetworkSettings
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
     * SandboxID uniquely represents a container's network stack.
     *
     * @var string|null
     */
    protected $sandboxID;
    /**
     * SandboxKey is the full path of the netns handle.
     *
     * @var string|null
     */
    protected $sandboxKey;
    /**
     * PortMap describes the mapping of container ports to host ports, using the
     * container's port-number and protocol as key in the format `<port>/<protocol>`,
     * for example, `80/udp`.
     *
     * If a container's port is mapped for multiple protocols, separate entries
     * are added to the mapping table.
     *
     * @var array<string, list<PortBinding>|null>|null
     */
    protected $ports;
    /**
     * Information about all networks that the container is connected to.
     *
     * @var array<string, EndpointSettings>
     */
    protected $networks;

    /**
     * SandboxID uniquely represents a container's network stack.
     *
     * @return string|null
     */
    public function getSandboxID(): ?string
    {
        return $this->sandboxID;
    }

    /**
     * SandboxID uniquely represents a container's network stack.
     *
     * @param string|null $sandboxID
     *
     * @return self
     */
    public function setSandboxID(?string $sandboxID): self
    {
        $this->initialized['sandboxID'] = true;
        $this->sandboxID                = $sandboxID;

        return $this;
    }

    /**
     * SandboxKey is the full path of the netns handle.
     *
     * @return string|null
     */
    public function getSandboxKey(): ?string
    {
        return $this->sandboxKey;
    }

    /**
     * SandboxKey is the full path of the netns handle.
     *
     * @param string|null $sandboxKey
     *
     * @return self
     */
    public function setSandboxKey(?string $sandboxKey): self
    {
        $this->initialized['sandboxKey'] = true;
        $this->sandboxKey                = $sandboxKey;

        return $this;
    }

    /**
     * PortMap describes the mapping of container ports to host ports, using the
     * container's port-number and protocol as key in the format `<port>/<protocol>`,
     * for example, `80/udp`.
     *
     * If a container's port is mapped for multiple protocols, separate entries
     * are added to the mapping table.
     *
     * @return array<string, list<PortBinding>|null>|null
     */
    public function getPorts(): ?iterable
    {
        return $this->ports;
    }

    /**
     * PortMap describes the mapping of container ports to host ports, using the
     * container's port-number and protocol as key in the format `<port>/<protocol>`,
     * for example, `80/udp`.
     *
     * If a container's port is mapped for multiple protocols, separate entries
     * are added to the mapping table.
     *
     * @param array<string, list<PortBinding>|null>|null $ports
     *
     * @return self
     */
    public function setPorts(?iterable $ports): self
    {
        $this->initialized['ports'] = true;
        $this->ports                = $ports;

        return $this;
    }

    /**
     * Information about all networks that the container is connected to.
     *
     * @return array<string, EndpointSettings>
     */
    public function getNetworks(): iterable
    {
        return $this->networks;
    }

    /**
     * Information about all networks that the container is connected to.
     *
     * @param array<string, EndpointSettings> $networks
     *
     * @return self
     */
    public function setNetworks(iterable $networks): self
    {
        $this->initialized['networks'] = true;
        $this->networks                = $networks;

        return $this;
    }
}
