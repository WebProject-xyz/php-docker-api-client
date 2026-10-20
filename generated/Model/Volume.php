<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use DateTimeInterface;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class Volume implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Name of the volume.
     *
     * @var string
     */
    public string $name;
    /**
     * Name of the volume driver used by the volume.
     *
     * @var string
     */
    public string $driver;
    /**
     * Mount path of the volume on the host.
     *
     * @var string
     */
    public string $mountpoint;
    /**
     * Date/Time the volume was created.
     *
     * @var DateTimeInterface|null
     */
    public ?DateTimeInterface $createdAt;
    /**
     * Low-level details about the volume, provided by the volume driver.
     * Details are returned as a map with key/value pairs:
     * `{"key":"value","key2":"value2"}`.
     *
     * The `Status` field is optional, and is omitted if the volume driver
     * does not support this feature.
     *
     * @var iterable<string, mixed>|null
     */
    public ?iterable $status;
    /**
     * User-defined key/value metadata.
     *
     * @var iterable<string, string>
     */
    public iterable $labels;
    /**
     * The level at which the volume exists. Either `global` for cluster-wide,
     * or `local` for machine level.
     *
     * @var VolumeScope
     */
    public VolumeScope $scope = 'local';
    /**
     * Options and information specific to, and only present on, Swarm CSI
     * cluster volumes.
     *
     * @var ClusterVolume
     */
    public ClusterVolume $clusterVolume;
    /**
     * The driver specific options used when creating the volume.
     *
     * @var iterable<string, string>
     */
    public iterable $options;
    /**
     * Usage details about the volume. This information is used by the
     * `GET /system/df` endpoint, and omitted in other endpoints.
     *
     * @var VolumeUsageData|null
     */
    public ?VolumeUsageData $usageData;

    public function definedProperties(): array
    {
        return ['name' => 'Name', 'driver' => 'Driver', 'mountpoint' => 'Mountpoint', 'createdAt' => 'CreatedAt', 'status' => 'Status', 'labels' => 'Labels', 'scope' => 'Scope', 'clusterVolume' => 'ClusterVolume', 'options' => 'Options', 'usageData' => 'UsageData'];
    }
}
