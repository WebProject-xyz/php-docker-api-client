<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ClusterVolumeSpec implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Group defines the volume group of this volume. Volumes belonging to
     * the same group can be referred to by group name when creating
     * Services.  Referring to a volume by group instructs Swarm to treat
     * volumes in that group interchangeably for the purpose of scheduling.
     * Volumes with an empty string for a group technically all belong to
     * the same, emptystring group.
     *
     * @var string|null
     */
    public ?string $group;
    /**
     * Defines how the volume is used by tasks.
     *
     * @var ClusterVolumeSpecAccessMode|null
     */
    public ?ClusterVolumeSpecAccessMode $accessMode;

    public function definedProperties(): array
    {
        return ['group' => 'Group', 'accessMode' => 'AccessMode'];
    }
}
