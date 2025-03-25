<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use ArrayObject;
use DateTime;
use function array_key_exists;

class ContainerStatsResponse extends ArrayObject
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
     * Name of the container.
     *
     * @var string|null
     */
    protected $name;
    /**
     * ID of the container.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Date and time at which this sample was collected.
     * The value is formatted as [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt)
     * with nano-seconds.
     *
     * @var DateTime
     */
    protected $read;
    /**
     * Date and time at which this first sample was collected. This field
     * is not propagated if the "one-shot" option is set. If the "one-shot"
     * option is set, this field may be omitted, empty, or set to a default
     * date (`0001-01-01T00:00:00Z`).
     *
     * The value is formatted as [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt)
     * with nano-seconds.
     *
     * @var DateTime
     */
    protected $preread;
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
     * @var int
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
     * CPU related info of the container.
     *
     * @var ContainerCPUStats|null
     */
    protected $cpuStats;
    /**
     * CPU related info of the container.
     *
     * @var ContainerCPUStats|null
     */
    protected $precpuStats;
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
     * @var array<string, mixed>|null
     */
    protected $networks;

    /**
     * Name of the container.
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Name of the container.
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
     * ID of the container.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * ID of the container.
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
     * Date and time at which this sample was collected.
     * The value is formatted as [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt)
     * with nano-seconds.
     *
     * @return DateTime
     */
    public function getRead(): DateTime
    {
        return $this->read;
    }

    /**
     * Date and time at which this sample was collected.
     * The value is formatted as [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt)
     * with nano-seconds.
     *
     * @param DateTime $read
     *
     * @return self
     */
    public function setRead(DateTime $read): self
    {
        $this->initialized['read'] = true;
        $this->read                = $read;

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
     * @return DateTime
     */
    public function getPreread(): DateTime
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
     * @param DateTime $preread
     *
     * @return self
     */
    public function setPreread(DateTime $preread): self
    {
        $this->initialized['preread'] = true;
        $this->preread                = $preread;

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
     * @return int
     */
    public function getNumProcs(): int
    {
        return $this->numProcs;
    }

    /**
     * The number of processors on the system.
     *
     * This field is Windows-specific and always zero for Linux containers.
     *
     * @param int $numProcs
     *
     * @return self
     */
    public function setNumProcs(int $numProcs): self
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
     * @return array<string, mixed>|null
     */
    public function getNetworks(): ?iterable
    {
        return $this->networks;
    }

    /**
     * Network statistics for the container per interface.
     *
     * This field is omitted if the container has no networking enabled.
     *
     * @param array<string, mixed>|null $networks
     *
     * @return self
     */
    public function setNetworks(?iterable $networks): self
    {
        $this->initialized['networks'] = true;
        $this->networks                = $networks;

        return $this;
    }
}
