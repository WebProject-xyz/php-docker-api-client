<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use ArrayObject;
use function array_key_exists;

class ContainerCPUStats extends ArrayObject
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
     * All CPU stats aggregated since container inception.
     *
     * @var ContainerCPUUsage|null
     */
    protected $cpuUsage;
    /**
     * System Usage.
     *
     * This field is Linux-specific and omitted for Windows containers.
     *
     * @var int|null
     */
    protected $systemCpuUsage;
    /**
     * Number of online CPUs.
     *
     * This field is Linux-specific and omitted for Windows containers.
     *
     * @var int|null
     */
    protected $onlineCpus;
    /**
     * CPU throttling stats of the container.
     *
     * This type is Linux-specific and omitted for Windows containers.
     *
     * @var ContainerThrottlingData|null
     */
    protected $throttlingData;

    /**
     * All CPU stats aggregated since container inception.
     *
     * @return ContainerCPUUsage|null
     */
    public function getCpuUsage(): ?ContainerCPUUsage
    {
        return $this->cpuUsage;
    }

    /**
     * All CPU stats aggregated since container inception.
     *
     * @param ContainerCPUUsage|null $cpuUsage
     *
     * @return self
     */
    public function setCpuUsage(?ContainerCPUUsage $cpuUsage): self
    {
        $this->initialized['cpuUsage'] = true;
        $this->cpuUsage                = $cpuUsage;

        return $this;
    }

    /**
     * System Usage.
     *
     * This field is Linux-specific and omitted for Windows containers.
     *
     * @return int|null
     */
    public function getSystemCpuUsage(): ?int
    {
        return $this->systemCpuUsage;
    }

    /**
     * System Usage.
     *
     * This field is Linux-specific and omitted for Windows containers.
     *
     * @param int|null $systemCpuUsage
     *
     * @return self
     */
    public function setSystemCpuUsage(?int $systemCpuUsage): self
    {
        $this->initialized['systemCpuUsage'] = true;
        $this->systemCpuUsage                = $systemCpuUsage;

        return $this;
    }

    /**
     * Number of online CPUs.
     *
     * This field is Linux-specific and omitted for Windows containers.
     *
     * @return int|null
     */
    public function getOnlineCpus(): ?int
    {
        return $this->onlineCpus;
    }

    /**
     * Number of online CPUs.
     *
     * This field is Linux-specific and omitted for Windows containers.
     *
     * @param int|null $onlineCpus
     *
     * @return self
     */
    public function setOnlineCpus(?int $onlineCpus): self
    {
        $this->initialized['onlineCpus'] = true;
        $this->onlineCpus                = $onlineCpus;

        return $this;
    }

    /**
     * CPU throttling stats of the container.
     *
     * This type is Linux-specific and omitted for Windows containers.
     *
     * @return ContainerThrottlingData|null
     */
    public function getThrottlingData(): ?ContainerThrottlingData
    {
        return $this->throttlingData;
    }

    /**
     * CPU throttling stats of the container.
     *
     * This type is Linux-specific and omitted for Windows containers.
     *
     * @param ContainerThrottlingData|null $throttlingData
     *
     * @return self
     */
    public function setThrottlingData(?ContainerThrottlingData $throttlingData): self
    {
        $this->initialized['throttlingData'] = true;
        $this->throttlingData                = $throttlingData;

        return $this;
    }
}
