<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class VolumesPrunePostResponse200 implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Volumes that were deleted.
     *
     * @var list<string>
     */
    public array $volumesDeleted;
    /**
     * Disk space reclaimed in bytes.
     *
     * @var int
     */
    public int $spaceReclaimed;

    public function definedProperties(): array
    {
        return ['volumesDeleted' => 'VolumesDeleted', 'spaceReclaimed' => 'SpaceReclaimed'];
    }
}
