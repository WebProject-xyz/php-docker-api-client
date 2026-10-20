<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ClusterVolumeInfo implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The capacity of the volume in bytes. A value of 0 indicates that
     * the capacity is unknown.
     *
     * @var int|null
     */
    public ?int $capacityBytes;
    /**
     * A map of strings to strings returned from the storage plugin when
     * the volume is created.
     *
     * @var iterable<string, string>|null
     */
    public ?iterable $volumeContext;
    /**
     * The ID of the volume as returned by the CSI storage plugin. This
     * is distinct from the volume's ID as provided by Docker. This ID
     * is never used by the user when communicating with Docker to refer
     * to this volume. If the ID is blank, then the Volume has not been
     * successfully created in the plugin yet.
     *
     * @var string|null
     */
    public ?string $volumeID;
    /**
     * The topology this volume is actually accessible from.
     *
     * @var list<Topology>|null
     */
    public ?array $accessibleTopology;

    public function definedProperties(): array
    {
        return ['capacityBytes' => 'CapacityBytes', 'volumeContext' => 'VolumeContext', 'volumeID' => 'VolumeID', 'accessibleTopology' => 'AccessibleTopology'];
    }
}
