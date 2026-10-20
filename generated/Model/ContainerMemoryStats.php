<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ContainerMemoryStats implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Current `res_counter` usage for memory.
     *
     * This field is Linux-specific and omitted for Windows containers.
     *
     * @var int|null
     */
    public ?int $usage;
    /**
     * Maximum usage ever recorded.
     *
     * This field is Linux-specific and only supported on cgroups v1.
     * It is omitted when using cgroups v2 and for Windows containers.
     *
     * @var int|null
     */
    public ?int $maxUsage;
    /**
     * All the stats exported via memory.stat.
     *
     * The fields in this object differ between cgroups v1 and v2.
     * On cgroups v1, fields such as `cache`, `rss`, `mapped_file` are available.
     * On cgroups v2, fields such as `file`, `anon`, `inactive_file` are available.
     *
     * This field is Linux-specific and omitted for Windows containers.
     *
     * @var iterable<string, int|null>|null
     */
    public ?iterable $stats;
    /**
     * Number of times memory usage hits limits.
     *
     * This field is Linux-specific and only supported on cgroups v1.
     * It is omitted when using cgroups v2 and for Windows containers.
     *
     * @var int|null
     */
    public ?int $failcnt;
    /**
     * This field is Linux-specific and omitted for Windows containers.
     *
     * @var int|null
     */
    public ?int $limit;
    /**
     * Committed bytes.
     *
     * This field is Windows-specific and omitted for Linux containers.
     *
     * @var int|null
     */
    public ?int $commitbytes;
    /**
     * Peak committed bytes.
     *
     * This field is Windows-specific and omitted for Linux containers.
     *
     * @var int|null
     */
    public ?int $commitpeakbytes;
    /**
     * Private working set.
     *
     * This field is Windows-specific and omitted for Linux containers.
     *
     * @var int|null
     */
    public ?int $privateworkingset;

    public function definedProperties(): array
    {
        return ['usage' => 'usage', 'maxUsage' => 'max_usage', 'stats' => 'stats', 'failcnt' => 'failcnt', 'limit' => 'limit', 'commitbytes' => 'commitbytes', 'commitpeakbytes' => 'commitpeakbytes', 'privateworkingset' => 'privateworkingset'];
    }
}
