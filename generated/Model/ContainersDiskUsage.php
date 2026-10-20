<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ContainersDiskUsage implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Count of active containers.
     *
     * @var int|null
     */
    public ?int $activeCount;
    /**
     * Count of all containers.
     *
     * @var int|null
     */
    public ?int $totalCount;
    /**
     * Disk space that can be reclaimed by removing inactive containers.
     *
     * @var int|null
     */
    public ?int $reclaimable;
    /**
     * Disk space in use by containers.
     *
     * @var int|null
     */
    public ?int $totalSize;
    /**
     * List of container summaries.
     *
     * @var list<mixed>|null
     */
    public ?array $items;

    public function definedProperties(): array
    {
        return ['activeCount' => 'ActiveCount', 'totalCount' => 'TotalCount', 'reclaimable' => 'Reclaimable', 'totalSize' => 'TotalSize', 'items' => 'Items'];
    }
}
