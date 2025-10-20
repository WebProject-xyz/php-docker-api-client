<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use ArrayObject;
use function array_key_exists;

class PortStatus extends ArrayObject
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
     * @var list<EndpointPortConfig>
     */
    protected $ports;

    /**
     * @return list<EndpointPortConfig>
     */
    public function getPorts(): array
    {
        return $this->ports;
    }

    /**
     * @param list<EndpointPortConfig> $ports
     *
     * @return self
     */
    public function setPorts(array $ports): self
    {
        $this->initialized['ports'] = true;
        $this->ports                = $ports;

        return $this;
    }
}
