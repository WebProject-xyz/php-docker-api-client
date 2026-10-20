<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class BuildPrunePostResponse200 implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<string>
     */
    public array $cachesDeleted;
    /**
     * Disk space reclaimed in bytes.
     *
     * @var int
     */
    public int $spaceReclaimed;

    public function definedProperties(): array
    {
        return ['cachesDeleted' => 'CachesDeleted', 'spaceReclaimed' => 'SpaceReclaimed'];
    }
}
