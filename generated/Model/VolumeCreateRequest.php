<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class VolumeCreateRequest implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The new volume's name. If not specified, Docker generates a name.
     *
     * @var string
     */
    public string $name;
    /**
     * Name of the volume driver to use.
     *
     * @var string
     */
    public string $driver = 'local';
    /**
     * A mapping of driver options and values. These options are
     * passed directly to the driver and are driver specific.
     *
     * @var iterable<string, string>|null
     */
    public ?iterable $driverOpts;
    /**
     * User-defined key/value metadata.
     *
     * @var iterable<string, string>|null
     */
    public ?iterable $labels;
    /**
     * Cluster-specific options used to create the volume.
     *
     * @var ClusterVolumeSpec
     */
    public ClusterVolumeSpec $clusterVolumeSpec;

    public function definedProperties(): array
    {
        return ['name' => 'Name', 'driver' => 'Driver', 'driverOpts' => 'DriverOpts', 'labels' => 'Labels', 'clusterVolumeSpec' => 'ClusterVolumeSpec'];
    }
}
