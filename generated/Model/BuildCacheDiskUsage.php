<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class BuildCacheDiskUsage implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Count of active build cache records.
     *
     * @var int|null
     */
    public ?int $activeCount;
    /**
     * Count of all build cache records.
     *
     * @var int|null
     */
    public ?int $totalCount;
    /**
     * Disk space that can be reclaimed by removing inactive build cache records.
     *
     * @var int|null
     */
    public ?int $reclaimable;
    /**
     * Disk space in use by build cache records.
     *
     * @var int|null
     */
    public ?int $totalSize;
    /**
     * List of build cache records.
     *
     * @var list<mixed>|null
     */
    public ?array $items;

    public function definedProperties(): array
    {
        return ['activeCount' => 'ActiveCount', 'totalCount' => 'TotalCount', 'reclaimable' => 'Reclaimable', 'totalSize' => 'TotalSize', 'items' => 'Items'];
    }
}
