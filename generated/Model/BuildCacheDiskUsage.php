<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use function array_key_exists;

class BuildCacheDiskUsage
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
     * Count of active build cache records.
     *
     * @var int|null
     */
    protected $activeCount;
    /**
     * Count of all build cache records.
     *
     * @var int|null
     */
    protected $totalCount;
    /**
     * Disk space that can be reclaimed by removing inactive build cache records.
     *
     * @var int|null
     */
    protected $reclaimable;
    /**
     * Disk space in use by build cache records.
     *
     * @var int|null
     */
    protected $totalSize;
    /**
     * List of build cache records.
     *
     * @var list<mixed>|null
     */
    protected $items;

    /**
     * Count of active build cache records.
     *
     * @return int|null
     */
    public function getActiveCount(): ?int
    {
        return $this->activeCount;
    }

    /**
     * Count of active build cache records.
     *
     * @param int|null $activeCount
     *
     * @return self
     */
    public function setActiveCount(?int $activeCount): self
    {
        $this->initialized['activeCount'] = true;
        $this->activeCount                = $activeCount;

        return $this;
    }

    /**
     * Count of all build cache records.
     *
     * @return int|null
     */
    public function getTotalCount(): ?int
    {
        return $this->totalCount;
    }

    /**
     * Count of all build cache records.
     *
     * @param int|null $totalCount
     *
     * @return self
     */
    public function setTotalCount(?int $totalCount): self
    {
        $this->initialized['totalCount'] = true;
        $this->totalCount                = $totalCount;

        return $this;
    }

    /**
     * Disk space that can be reclaimed by removing inactive build cache records.
     *
     * @return int|null
     */
    public function getReclaimable(): ?int
    {
        return $this->reclaimable;
    }

    /**
     * Disk space that can be reclaimed by removing inactive build cache records.
     *
     * @param int|null $reclaimable
     *
     * @return self
     */
    public function setReclaimable(?int $reclaimable): self
    {
        $this->initialized['reclaimable'] = true;
        $this->reclaimable                = $reclaimable;

        return $this;
    }

    /**
     * Disk space in use by build cache records.
     *
     * @return int|null
     */
    public function getTotalSize(): ?int
    {
        return $this->totalSize;
    }

    /**
     * Disk space in use by build cache records.
     *
     * @param int|null $totalSize
     *
     * @return self
     */
    public function setTotalSize(?int $totalSize): self
    {
        $this->initialized['totalSize'] = true;
        $this->totalSize                = $totalSize;

        return $this;
    }

    /**
     * List of build cache records.
     *
     * @return list<mixed>|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * List of build cache records.
     *
     * @param list<mixed>|null $items
     *
     * @return self
     */
    public function setItems(?array $items): self
    {
        $this->initialized['items'] = true;
        $this->items                = $items;

        return $this;
    }
}
