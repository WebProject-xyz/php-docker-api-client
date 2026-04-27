<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use function array_key_exists;

class NetworkTaskInfo
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
     * @var string|null
     */
    protected $name;
    /**
     * @var string|null
     */
    protected $endpointID;
    /**
     * @var string|null
     */
    protected $endpointIP;
    /**
     * @var array<string, string>|null
     */
    protected $info;

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name                = $name;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEndpointID(): ?string
    {
        return $this->endpointID;
    }

    /**
     * @param string|null $endpointID
     *
     * @return self
     */
    public function setEndpointID(?string $endpointID): self
    {
        $this->initialized['endpointID'] = true;
        $this->endpointID                = $endpointID;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEndpointIP(): ?string
    {
        return $this->endpointIP;
    }

    /**
     * @param string|null $endpointIP
     *
     * @return self
     */
    public function setEndpointIP(?string $endpointIP): self
    {
        $this->initialized['endpointIP'] = true;
        $this->endpointIP                = $endpointIP;

        return $this;
    }

    /**
     * @return array<string, string>|null
     */
    public function getInfo(): ?iterable
    {
        return $this->info;
    }

    /**
     * @param array<string, string>|null $info
     *
     * @return self
     */
    public function setInfo(?iterable $info): self
    {
        $this->initialized['info'] = true;
        $this->info                = $info;

        return $this;
    }
}
