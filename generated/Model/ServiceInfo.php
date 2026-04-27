<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use function array_key_exists;

class ServiceInfo
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
    protected $vIP;
    /**
     * @var list<string>|null
     */
    protected $ports;
    /**
     * @var int|null
     */
    protected $localLBIndex;
    /**
     * @var list<NetworkTaskInfo>|null
     */
    protected $tasks;

    /**
     * @return string|null
     */
    public function getVIP(): ?string
    {
        return $this->vIP;
    }

    /**
     * @param string|null $vIP
     *
     * @return self
     */
    public function setVIP(?string $vIP): self
    {
        $this->initialized['vIP'] = true;
        $this->vIP                = $vIP;

        return $this;
    }

    /**
     * @return list<string>|null
     */
    public function getPorts(): ?array
    {
        return $this->ports;
    }

    /**
     * @param list<string>|null $ports
     *
     * @return self
     */
    public function setPorts(?array $ports): self
    {
        $this->initialized['ports'] = true;
        $this->ports                = $ports;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getLocalLBIndex(): ?int
    {
        return $this->localLBIndex;
    }

    /**
     * @param int|null $localLBIndex
     *
     * @return self
     */
    public function setLocalLBIndex(?int $localLBIndex): self
    {
        $this->initialized['localLBIndex'] = true;
        $this->localLBIndex                = $localLBIndex;

        return $this;
    }

    /**
     * @return list<NetworkTaskInfo>|null
     */
    public function getTasks(): ?array
    {
        return $this->tasks;
    }

    /**
     * @param list<NetworkTaskInfo>|null $tasks
     *
     * @return self
     */
    public function setTasks(?array $tasks): self
    {
        $this->initialized['tasks'] = true;
        $this->tasks                = $tasks;

        return $this;
    }
}
