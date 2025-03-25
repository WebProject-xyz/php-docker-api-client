<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use ArrayObject;
use function array_key_exists;

class VolumesNamePutBody extends ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Cluster-specific options used to create the volume.
     *
     * @var ClusterVolumeSpec
     */
    protected $spec;

    /**
     * Cluster-specific options used to create the volume.
     *
     * @return ClusterVolumeSpec
     */
    public function getSpec(): ClusterVolumeSpec
    {
        return $this->spec;
    }

    /**
     * Cluster-specific options used to create the volume.
     *
     * @param ClusterVolumeSpec $spec
     *
     * @return self
     */
    public function setSpec(ClusterVolumeSpec $spec): self
    {
        $this->initialized['spec'] = true;
        $this->spec                = $spec;

        return $this;
    }
}
