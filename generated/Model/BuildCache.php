<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use DateTimeInterface;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class BuildCache implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Unique ID of the build cache record.
     *
     * @var string|null
     */
    public ?string $iD;
    /**
     * List of parent build cache record IDs.
     *
     * @var list<string>|null
     */
    public ?array $parents;
    /**
     * Cache record type.
     *
     * @var string|null
     */
    public ?string $type;
    /**
     * Description of the build-step that produced the build cache.
     *
     * @var string|null
     */
    public ?string $description;
    /**
     * Indicates if the build cache is in use.
     *
     * @var bool|null
     */
    public ?bool $inUse;
    /**
     * Indicates if the build cache is shared.
     *
     * @var bool|null
     */
    public ?bool $shared;
    /**
     * Amount of disk space used by the build cache (in bytes).
     *
     * @var int|null
     */
    public ?int $size;
    /**
     * Date and time at which the build cache was created in
     * [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
     *
     * @var DateTimeInterface|null
     */
    public ?DateTimeInterface $createdAt;
    /**
     * Date and time at which the build cache was last used in
     * [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
     *
     * @var DateTimeInterface|null
     */
    public ?DateTimeInterface $lastUsedAt;
    /**
     * @var int|null
     */
    public ?int $usageCount;

    public function definedProperties(): array
    {
        return ['iD' => 'ID', 'parents' => 'Parents', 'type' => 'Type', 'description' => 'Description', 'inUse' => 'InUse', 'shared' => 'Shared', 'size' => 'Size', 'createdAt' => 'CreatedAt', 'lastUsedAt' => 'LastUsedAt', 'usageCount' => 'UsageCount'];
    }
}
