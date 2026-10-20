<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class VolumesNamePutBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Cluster-specific options used to create the volume.
     *
     * @var ClusterVolumeSpec
     */
    public ClusterVolumeSpec $spec;

    public function definedProperties(): array
    {
        return ['spec' => 'Spec'];
    }
}
