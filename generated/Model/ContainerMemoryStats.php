<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use ArrayObject;
use function array_key_exists;

class ContainerMemoryStats extends ArrayObject
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
     * Current `res_counter` usage for memory.
     *
     * This field is Linux-specific and omitted for Windows containers.
     *
     * @var int|null
     */
    protected $usage;
    /**
     * Maximum usage ever recorded.
     *
     * This field is Linux-specific and only supported on cgroups v1.
     * It is omitted when using cgroups v2 and for Windows containers.
     *
     * @var int|null
     */
    protected $maxUsage;
    /**
     * All the stats exported via memory.stat. when using cgroups v2.
     *
     * This field is Linux-specific and omitted for Windows containers.
     *
     * @var array<string, int>
     */
    protected $stats;
    /**
     * Number of times memory usage hits limits.
     *
     * This field is Linux-specific and only supported on cgroups v1.
     * It is omitted when using cgroups v2 and for Windows containers.
     *
     * @var int|null
     */
    protected $failcnt;
    /**
     * This field is Linux-specific and omitted for Windows containers.
     *
     * @var int|null
     */
    protected $limit;
    /**
     * Committed bytes.
     *
     * This field is Windows-specific and omitted for Linux containers.
     *
     * @var int|null
     */
    protected $commitbytes;
    /**
     * Peak committed bytes.
     *
     * This field is Windows-specific and omitted for Linux containers.
     *
     * @var int|null
     */
    protected $commitpeakbytes;
    /**
     * Private working set.
     *
     * This field is Windows-specific and omitted for Linux containers.
     *
     * @var int|null
     */
    protected $privateworkingset;

    /**
     * Current `res_counter` usage for memory.
     *
     * This field is Linux-specific and omitted for Windows containers.
     *
     * @return int|null
     */
    public function getUsage(): ?int
    {
        return $this->usage;
    }

    /**
     * Current `res_counter` usage for memory.
     *
     * This field is Linux-specific and omitted for Windows containers.
     *
     * @param int|null $usage
     *
     * @return self
     */
    public function setUsage(?int $usage): self
    {
        $this->initialized['usage'] = true;
        $this->usage                = $usage;

        return $this;
    }

    /**
     * Maximum usage ever recorded.
     *
     * This field is Linux-specific and only supported on cgroups v1.
     * It is omitted when using cgroups v2 and for Windows containers.
     *
     * @return int|null
     */
    public function getMaxUsage(): ?int
    {
        return $this->maxUsage;
    }

    /**
     * Maximum usage ever recorded.
     *
     * This field is Linux-specific and only supported on cgroups v1.
     * It is omitted when using cgroups v2 and for Windows containers.
     *
     * @param int|null $maxUsage
     *
     * @return self
     */
    public function setMaxUsage(?int $maxUsage): self
    {
        $this->initialized['maxUsage'] = true;
        $this->maxUsage                = $maxUsage;

        return $this;
    }

    /**
     * All the stats exported via memory.stat. when using cgroups v2.
     *
     * This field is Linux-specific and omitted for Windows containers.
     *
     * @return array<string, int>
     */
    public function getStats(): iterable
    {
        return $this->stats;
    }

    /**
     * All the stats exported via memory.stat. when using cgroups v2.
     *
     * This field is Linux-specific and omitted for Windows containers.
     *
     * @param array<string, int> $stats
     *
     * @return self
     */
    public function setStats(iterable $stats): self
    {
        $this->initialized['stats'] = true;
        $this->stats                = $stats;

        return $this;
    }

    /**
     * Number of times memory usage hits limits.
     *
     * This field is Linux-specific and only supported on cgroups v1.
     * It is omitted when using cgroups v2 and for Windows containers.
     *
     * @return int|null
     */
    public function getFailcnt(): ?int
    {
        return $this->failcnt;
    }

    /**
     * Number of times memory usage hits limits.
     *
     * This field is Linux-specific and only supported on cgroups v1.
     * It is omitted when using cgroups v2 and for Windows containers.
     *
     * @param int|null $failcnt
     *
     * @return self
     */
    public function setFailcnt(?int $failcnt): self
    {
        $this->initialized['failcnt'] = true;
        $this->failcnt                = $failcnt;

        return $this;
    }

    /**
     * This field is Linux-specific and omitted for Windows containers.
     *
     * @return int|null
     */
    public function getLimit(): ?int
    {
        return $this->limit;
    }

    /**
     * This field is Linux-specific and omitted for Windows containers.
     *
     * @param int|null $limit
     *
     * @return self
     */
    public function setLimit(?int $limit): self
    {
        $this->initialized['limit'] = true;
        $this->limit                = $limit;

        return $this;
    }

    /**
     * Committed bytes.
     *
     * This field is Windows-specific and omitted for Linux containers.
     *
     * @return int|null
     */
    public function getCommitbytes(): ?int
    {
        return $this->commitbytes;
    }

    /**
     * Committed bytes.
     *
     * This field is Windows-specific and omitted for Linux containers.
     *
     * @param int|null $commitbytes
     *
     * @return self
     */
    public function setCommitbytes(?int $commitbytes): self
    {
        $this->initialized['commitbytes'] = true;
        $this->commitbytes                = $commitbytes;

        return $this;
    }

    /**
     * Peak committed bytes.
     *
     * This field is Windows-specific and omitted for Linux containers.
     *
     * @return int|null
     */
    public function getCommitpeakbytes(): ?int
    {
        return $this->commitpeakbytes;
    }

    /**
     * Peak committed bytes.
     *
     * This field is Windows-specific and omitted for Linux containers.
     *
     * @param int|null $commitpeakbytes
     *
     * @return self
     */
    public function setCommitpeakbytes(?int $commitpeakbytes): self
    {
        $this->initialized['commitpeakbytes'] = true;
        $this->commitpeakbytes                = $commitpeakbytes;

        return $this;
    }

    /**
     * Private working set.
     *
     * This field is Windows-specific and omitted for Linux containers.
     *
     * @return int|null
     */
    public function getPrivateworkingset(): ?int
    {
        return $this->privateworkingset;
    }

    /**
     * Private working set.
     *
     * This field is Windows-specific and omitted for Linux containers.
     *
     * @param int|null $privateworkingset
     *
     * @return self
     */
    public function setPrivateworkingset(?int $privateworkingset): self
    {
        $this->initialized['privateworkingset'] = true;
        $this->privateworkingset                = $privateworkingset;

        return $this;
    }
}
