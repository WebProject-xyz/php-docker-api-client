<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ContainersPrunePostResponse200 implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Container IDs that were deleted.
     *
     * @var list<string>
     */
    public array $containersDeleted;
    /**
     * Disk space reclaimed in bytes.
     *
     * @var int
     */
    public int $spaceReclaimed;

    public function definedProperties(): array
    {
        return ['containersDeleted' => 'ContainersDeleted', 'spaceReclaimed' => 'SpaceReclaimed'];
    }
}
