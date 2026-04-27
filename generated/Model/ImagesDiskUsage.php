<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use function array_key_exists;

class ImagesDiskUsage
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
     * Count of active images.
     *
     * @var int|null
     */
    protected $activeCount;
    /**
     * Count of all images.
     *
     * @var int|null
     */
    protected $totalCount;
    /**
     * Disk space that can be reclaimed by removing unused images.
     *
     * @var int|null
     */
    protected $reclaimable;
    /**
     * Disk space in use by images.
     *
     * @var int|null
     */
    protected $totalSize;
    /**
     * List of image summaries.
     *
     * @var list<mixed>|null
     */
    protected $items;

    /**
     * Count of active images.
     *
     * @return int|null
     */
    public function getActiveCount(): ?int
    {
        return $this->activeCount;
    }

    /**
     * Count of active images.
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
     * Count of all images.
     *
     * @return int|null
     */
    public function getTotalCount(): ?int
    {
        return $this->totalCount;
    }

    /**
     * Count of all images.
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
     * Disk space that can be reclaimed by removing unused images.
     *
     * @return int|null
     */
    public function getReclaimable(): ?int
    {
        return $this->reclaimable;
    }

    /**
     * Disk space that can be reclaimed by removing unused images.
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
     * Disk space in use by images.
     *
     * @return int|null
     */
    public function getTotalSize(): ?int
    {
        return $this->totalSize;
    }

    /**
     * Disk space in use by images.
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
     * List of image summaries.
     *
     * @return list<mixed>|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * List of image summaries.
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
