<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use function array_key_exists;

class ContainersDiskUsage
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
     * Count of active containers.
     *
     * @var int|null
     */
    protected $activeCount;
    /**
     * Count of all containers.
     *
     * @var int|null
     */
    protected $totalCount;
    /**
     * Disk space that can be reclaimed by removing inactive containers.
     *
     * @var int|null
     */
    protected $reclaimable;
    /**
     * Disk space in use by containers.
     *
     * @var int|null
     */
    protected $totalSize;
    /**
     * List of container summaries.
     *
     * @var list<mixed>|null
     */
    protected $items;

    /**
     * Count of active containers.
     *
     * @return int|null
     */
    public function getActiveCount(): ?int
    {
        return $this->activeCount;
    }

    /**
     * Count of active containers.
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
     * Count of all containers.
     *
     * @return int|null
     */
    public function getTotalCount(): ?int
    {
        return $this->totalCount;
    }

    /**
     * Count of all containers.
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
     * Disk space that can be reclaimed by removing inactive containers.
     *
     * @return int|null
     */
    public function getReclaimable(): ?int
    {
        return $this->reclaimable;
    }

    /**
     * Disk space that can be reclaimed by removing inactive containers.
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
     * Disk space in use by containers.
     *
     * @return int|null
     */
    public function getTotalSize(): ?int
    {
        return $this->totalSize;
    }

    /**
     * Disk space in use by containers.
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
     * List of container summaries.
     *
     * @return list<mixed>|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * List of container summaries.
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
