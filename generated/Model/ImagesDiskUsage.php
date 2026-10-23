<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ImagesDiskUsage implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Count of active images.
     *
     * @var int|null
     */
    public ?int $activeCount;
    /**
     * Count of all images.
     *
     * @var int|null
     */
    public ?int $totalCount;
    /**
     * Disk space that can be reclaimed by removing unused images.
     *
     * @var int|null
     */
    public ?int $reclaimable;
    /**
     * Disk space in use by images.
     *
     * @var int|null
     */
    public ?int $totalSize;
    /**
     * List of image summaries.
     *
     * @var list<mixed>|null
     */
    public ?array $items;

    public function definedProperties(): array
    {
        return ['activeCount' => 'ActiveCount', 'totalCount' => 'TotalCount', 'reclaimable' => 'Reclaimable', 'totalSize' => 'TotalSize', 'items' => 'Items'];
    }
}
