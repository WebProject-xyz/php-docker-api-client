<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use function array_key_exists;

class ContainerStatsResponse
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
     * ID of the container for which the stats were collected.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Name of the container for which the stats were collected.
     *
     * @var string|null
     */
    protected $name;
    /**
     * OSType is the OS of the container ("linux" or "windows") to allow
     * platform-specific handling of stats.
     *
     * @var string|null
     */
    protected $osType;
    /**
     * Date and time at which this sample was collected.
     * The value is formatted as [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt)
     * with nano-seconds.
     *
     * @var string|null
     */
    protected $read;
    /**
     * CPU related info of the container.
     *
     * @var ContainerCPUStats|null
     */
    protected $cpuStats;
    /**
     * Aggregates all memory stats since container inception on Linux.
     * Windows returns stats for commit and private working set only.
     *
     * @var ContainerMemoryStats
     */
    protected $memoryStats;
    /**
     * Network statistics for the container per interface.
     *
     * This field is omitted if the container has no networking enabled.
     *
     * @var mixed
     */
    protected $networks;
    /**
     * PidsStats contains Linux-specific stats of a container's process-IDs (PIDs).
     *
     * This type is Linux-specific and omitted for Windows containers.
     *
     * @var ContainerPidsStats|null
     */
    protected $pidsStats;
    /**
     * BlkioStats stores all IO service stats for data read and write.
     *
     * This type is Linux-specific and holds many fields that are specific to cgroups v1.
     * On a cgroup v2 host, all fields other than `io_service_bytes_recursive`
     * are omitted or `null`.
     *
     * This type is only populated on Linux and omitted for Windows containers.
     *
     * @var ContainerBlkioStats|null
     */
    protected $blkioStats;
    /**
     * The number of processors on the system.
     *
     * This field is Windows-specific and always zero for Linux containers.
     *
     * @var int|null
     */
    protected $numProcs;
    /**
     * StorageStats is the disk I/O stats for read/write on Windows.
     *
     * This type is Windows-specific and omitted for Linux containers.
     *
     * @var ContainerStorageStats|null
     */
    protected $storageStats;
    /**
     * Date and time at which this first sample was collected. This field
     * is not propagated if the "one-shot" option is set. If the "one-shot"
     * option is set, this field may be omitted, empty, or set to a default
     * date (`0001-01-01T00:00:00Z`).
     *
     * The value is formatted as [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt)
     * with nano-seconds.
     *
     * @var string|null
     */
    protected $preread;
    /**
     * CPU related info of the container.
     *
     * @var ContainerCPUStats|null
     */
    protected $precpuStats;

    /**
     * ID of the container for which the stats were collected.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * ID of the container for which the stats were collected.
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id                = $id;

        return $this;
    }

    /**
     * Name of the container for which the stats were collected.
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Name of the container for which the stats were collected.
     *
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
     * OSType is the OS of the container ("linux" or "windows") to allow
     * platform-specific handling of stats.
     *
     * @return string|null
     */
    public function getOsType(): ?string
    {
        return $this->osType;
    }

    /**
     * OSType is the OS of the container ("linux" or "windows") to allow
     * platform-specific handling of stats.
     *
     * @param string|null $osType
     *
     * @return self
     */
    public function setOsType(?string $osType): self
    {
        $this->initialized['osType'] = true;
        $this->osType                = $osType;

        return $this;
    }

    /**
     * Date and time at which this sample was collected.
     * The value is formatted as [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt)
     * with nano-seconds.
     *
     * @return string|null
     */
    public function getRead(): ?string
    {
        return $this->read;
    }

    /**
     * Date and time at which this sample was collected.
     * The value is formatted as [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt)
     * with nano-seconds.
     *
     * @param string|null $read
     *
     * @return self
     */
    public function setRead(?string $read): self
    {
        $this->initialized['read'] = true;
        $this->read                = $read;

        return $this;
    }

    /**
     * CPU related info of the container.
     *
     * @return ContainerCPUStats|null
     */
    public function getCpuStats(): ?ContainerCPUStats
    {
        return $this->cpuStats;
    }

    /**
     * CPU related info of the container.
     *
     * @param ContainerCPUStats|null $cpuStats
     *
     * @return self
     */
    public function setCpuStats(?ContainerCPUStats $cpuStats): self
    {
        $this->initialized['cpuStats'] = true;
        $this->cpuStats                = $cpuStats;

        return $this;
    }

    /**
     * Aggregates all memory stats since container inception on Linux.
     * Windows returns stats for commit and private working set only.
     *
     * @return ContainerMemoryStats
     */
    public function getMemoryStats(): ContainerMemoryStats
    {
        return $this->memoryStats;
    }

    /**
     * Aggregates all memory stats since container inception on Linux.
     * Windows returns stats for commit and private working set only.
     *
     * @param ContainerMemoryStats $memoryStats
     *
     * @return self
     */
    public function setMemoryStats(ContainerMemoryStats $memoryStats): self
    {
        $this->initialized['memoryStats'] = true;
        $this->memoryStats                = $memoryStats;

        return $this;
    }

    /**
     * Network statistics for the container per interface.
     *
     * This field is omitted if the container has no networking enabled.
     *
     * @return mixed
     */
    public function getNetworks()
    {
        return $this->networks;
    }

    /**
     * Network statistics for the container per interface.
     *
     * This field is omitted if the container has no networking enabled.
     *
     * @param mixed $networks
     *
     * @return self
     */
    public function setNetworks($networks): self
    {
        $this->initialized['networks'] = true;
        $this->networks                = $networks;

        return $this;
    }

    /**
     * PidsStats contains Linux-specific stats of a container's process-IDs (PIDs).
     *
     * This type is Linux-specific and omitted for Windows containers.
     *
     * @return ContainerPidsStats|null
     */
    public function getPidsStats(): ?ContainerPidsStats
    {
        return $this->pidsStats;
    }

    /**
     * PidsStats contains Linux-specific stats of a container's process-IDs (PIDs).
     *
     * This type is Linux-specific and omitted for Windows containers.
     *
     * @param ContainerPidsStats|null $pidsStats
     *
     * @return self
     */
    public function setPidsStats(?ContainerPidsStats $pidsStats): self
    {
        $this->initialized['pidsStats'] = true;
        $this->pidsStats                = $pidsStats;

        return $this;
    }

    /**
     * BlkioStats stores all IO service stats for data read and write.
     *
     * This type is Linux-specific and holds many fields that are specific to cgroups v1.
     * On a cgroup v2 host, all fields other than `io_service_bytes_recursive`
     * are omitted or `null`.
     *
     * This type is only populated on Linux and omitted for Windows containers.
     *
     * @return ContainerBlkioStats|null
     */
    public function getBlkioStats(): ?ContainerBlkioStats
    {
        return $this->blkioStats;
    }

    /**
     * BlkioStats stores all IO service stats for data read and write.
     *
     * This type is Linux-specific and holds many fields that are specific to cgroups v1.
     * On a cgroup v2 host, all fields other than `io_service_bytes_recursive`
     * are omitted or `null`.
     *
     * This type is only populated on Linux and omitted for Windows containers.
     *
     * @param ContainerBlkioStats|null $blkioStats
     *
     * @return self
     */
    public function setBlkioStats(?ContainerBlkioStats $blkioStats): self
    {
        $this->initialized['blkioStats'] = true;
        $this->blkioStats                = $blkioStats;

        return $this;
    }

    /**
     * The number of processors on the system.
     *
     * This field is Windows-specific and always zero for Linux containers.
     *
     * @return int|null
     */
    public function getNumProcs(): ?int
    {
        return $this->numProcs;
    }

    /**
     * The number of processors on the system.
     *
     * This field is Windows-specific and always zero for Linux containers.
     *
     * @param int|null $numProcs
     *
     * @return self
     */
    public function setNumProcs(?int $numProcs): self
    {
        $this->initialized['numProcs'] = true;
        $this->numProcs                = $numProcs;

        return $this;
    }

    /**
     * StorageStats is the disk I/O stats for read/write on Windows.
     *
     * This type is Windows-specific and omitted for Linux containers.
     *
     * @return ContainerStorageStats|null
     */
    public function getStorageStats(): ?ContainerStorageStats
    {
        return $this->storageStats;
    }

    /**
     * StorageStats is the disk I/O stats for read/write on Windows.
     *
     * This type is Windows-specific and omitted for Linux containers.
     *
     * @param ContainerStorageStats|null $storageStats
     *
     * @return self
     */
    public function setStorageStats(?ContainerStorageStats $storageStats): self
    {
        $this->initialized['storageStats'] = true;
        $this->storageStats                = $storageStats;

        return $this;
    }

    /**
     * Date and time at which this first sample was collected. This field
     * is not propagated if the "one-shot" option is set. If the "one-shot"
     * option is set, this field may be omitted, empty, or set to a default
     * date (`0001-01-01T00:00:00Z`).
     *
     * The value is formatted as [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt)
     * with nano-seconds.
     *
     * @return string|null
     */
    public function getPreread(): ?string
    {
        return $this->preread;
    }

    /**
     * Date and time at which this first sample was collected. This field
     * is not propagated if the "one-shot" option is set. If the "one-shot"
     * option is set, this field may be omitted, empty, or set to a default
     * date (`0001-01-01T00:00:00Z`).
     *
     * The value is formatted as [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt)
     * with nano-seconds.
     *
     * @param string|null $preread
     *
     * @return self
     */
    public function setPreread(?string $preread): self
    {
        $this->initialized['preread'] = true;
        $this->preread                = $preread;

        return $this;
    }

    /**
     * CPU related info of the container.
     *
     * @return ContainerCPUStats|null
     */
    public function getPrecpuStats(): ?ContainerCPUStats
    {
        return $this->precpuStats;
    }

    /**
     * CPU related info of the container.
     *
     * @param ContainerCPUStats|null $precpuStats
     *
     * @return self
     */
    public function setPrecpuStats(?ContainerCPUStats $precpuStats): self
    {
        $this->initialized['precpuStats'] = true;
        $this->precpuStats                = $precpuStats;

        return $this;
    }
}
