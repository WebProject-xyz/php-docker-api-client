<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use DateTimeInterface;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ContainerStatsResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * ID of the container for which the stats were collected.
     *
     * @var string|null
     */
    public ?string $id;
    /**
     * Name of the container for which the stats were collected.
     *
     * @var string|null
     */
    public ?string $name;
    /**
     * OSType is the OS of the container ("linux" or "windows") to allow
     * platform-specific handling of stats.
     *
     * @var string|null
     */
    public ?string $osType;
    /**
     * Date and time at which this sample was collected.
     * The value is formatted as [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt)
     * with nano-seconds.
     *
     * @var DateTimeInterface|null
     */
    public ?DateTimeInterface $read;
    /**
     * CPU related info of the container.
     *
     * @var ContainerCPUStats|null
     */
    public ?ContainerCPUStats $cpuStats;
    /**
     * Aggregates all memory stats since container inception on Linux.
     * Windows returns stats for commit and private working set only.
     *
     * @var ContainerMemoryStats
     */
    public ContainerMemoryStats $memoryStats;
    /**
     * Network statistics for the container per interface.
     *
     * This field is omitted if the container has no networking enabled.
     *
     * @var mixed
     */
    public $networks;
    /**
     * PidsStats contains Linux-specific stats of a container's process-IDs (PIDs).
     *
     * This type is Linux-specific and omitted for Windows containers.
     *
     * @var ContainerPidsStats|null
     */
    public ?ContainerPidsStats $pidsStats;
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
    public ?ContainerBlkioStats $blkioStats;
    /**
     * The number of processors on the system.
     *
     * This field is Windows-specific and always zero for Linux containers.
     *
     * @var int|null
     */
    public ?int $numProcs;
    /**
     * StorageStats is the disk I/O stats for read/write on Windows.
     *
     * This type is Windows-specific and omitted for Linux containers.
     *
     * @var ContainerStorageStats|null
     */
    public ?ContainerStorageStats $storageStats;
    /**
     * Date and time at which this first sample was collected. This field
     * is not propagated if the "one-shot" option is set. If the "one-shot"
     * option is set, this field may be omitted, empty, or set to a default
     * date (`0001-01-01T00:00:00Z`).
     *
     * The value is formatted as [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt)
     * with nano-seconds.
     *
     * @var DateTimeInterface|null
     */
    public ?DateTimeInterface $preread;
    /**
     * CPU related info of the container.
     *
     * @var ContainerCPUStats|null
     */
    public ?ContainerCPUStats $precpuStats;

    public function definedProperties(): array
    {
        return ['id' => 'id', 'name' => 'name', 'osType' => 'os_type', 'read' => 'read', 'cpuStats' => 'cpu_stats', 'memoryStats' => 'memory_stats', 'networks' => 'networks', 'pidsStats' => 'pids_stats', 'blkioStats' => 'blkio_stats', 'numProcs' => 'num_procs', 'storageStats' => 'storage_stats', 'preread' => 'preread', 'precpuStats' => 'precpu_stats'];
    }
}
