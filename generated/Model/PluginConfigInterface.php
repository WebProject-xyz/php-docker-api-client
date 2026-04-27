<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use function array_key_exists;

class PluginConfigInterface
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
     * @var list<string>
     */
    protected $types;
    /**
     * @var string
     */
    protected $socket;
    /**
     * Protocol to use for clients connecting to the plugin.
     *
     * @var string|null
     */
    protected $protocolScheme;

    /**
     * @return list<string>
     */
    public function getTypes(): array
    {
        return $this->types;
    }

    /**
     * @param list<string> $types
     *
     * @return self
     */
    public function setTypes(array $types): self
    {
        $this->initialized['types'] = true;
        $this->types                = $types;

        return $this;
    }

    /**
     * @return string
     */
    public function getSocket(): string
    {
        return $this->socket;
    }

    /**
     * @param string $socket
     *
     * @return self
     */
    public function setSocket(string $socket): self
    {
        $this->initialized['socket'] = true;
        $this->socket                = $socket;

        return $this;
    }

    /**
     * Protocol to use for clients connecting to the plugin.
     *
     * @return string|null
     */
    public function getProtocolScheme(): ?string
    {
        return $this->protocolScheme;
    }

    /**
     * Protocol to use for clients connecting to the plugin.
     *
     * @param string|null $protocolScheme
     *
     * @return self
     */
    public function setProtocolScheme(?string $protocolScheme): self
    {
        $this->initialized['protocolScheme'] = true;
        $this->protocolScheme                = $protocolScheme;

        return $this;
    }
}
