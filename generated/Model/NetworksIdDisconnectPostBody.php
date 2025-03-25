<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use ArrayObject;
use function array_key_exists;

class NetworksIdDisconnectPostBody extends ArrayObject
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
     * The ID or name of the container to disconnect from the network.
     *
     * @var string
     */
    protected $container;
    /**
     * Force the container to disconnect from the network.
     *
     * @var bool
     */
    protected $force;

    /**
     * The ID or name of the container to disconnect from the network.
     *
     * @return string
     */
    public function getContainer(): string
    {
        return $this->container;
    }

    /**
     * The ID or name of the container to disconnect from the network.
     *
     * @param string $container
     *
     * @return self
     */
    public function setContainer(string $container): self
    {
        $this->initialized['container'] = true;
        $this->container                = $container;

        return $this;
    }

    /**
     * Force the container to disconnect from the network.
     *
     * @return bool
     */
    public function getForce(): bool
    {
        return $this->force;
    }

    /**
     * Force the container to disconnect from the network.
     *
     * @param bool $force
     *
     * @return self
     */
    public function setForce(bool $force): self
    {
        $this->initialized['force'] = true;
        $this->force                = $force;

        return $this;
    }
}
