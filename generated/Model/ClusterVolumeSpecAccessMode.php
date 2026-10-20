<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ClusterVolumeSpecAccessMode implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The set of nodes this volume can be used on at one time.
     * - `single` The volume may only be scheduled to one node at a time.
     * - `multi` the volume may be scheduled to any supported number of nodes at a time.
     *
     * @var ClusterVolumeSpecAccessModeScope
     */
    public ClusterVolumeSpecAccessModeScope $scope = 'single';
    /**
     * The number and way that different tasks can use this volume
     * at one time.
     * - `none` The volume may only be used by one task at a time.
     * - `readonly` The volume may be used by any number of tasks, but they all must mount the volume as readonly
     * - `onewriter` The volume may be used by any number of tasks, but only one may mount it as read/write.
     * - `all` The volume may have any number of readers and writers.
     *
     * @var ClusterVolumeSpecAccessModeSharing
     */
    public ClusterVolumeSpecAccessModeSharing $sharing = 'none';
    /**
     * Options for using this volume as a Mount-type volume.
     *
     *     Either MountVolume or BlockVolume, but not both, must be
     *     present.
     *   properties:
     *     FsType:
     *       type: "string"
     *       description: |
     *         Specifies the filesystem type for the mount volume.
     *         Optional.
     *     MountFlags:
     *       type: "array"
     *       description: |
     *         Flags to pass when mounting the volume. Optional.
     *       items:
     *         type: "string"
     * BlockVolume:
     *   type: "object"
     *   description: |
     *     Options for using this volume as a Block-type volume.
     *     Intentionally empty.
     *
     * @var mixed|null
     */
    public $mountVolume;
    /**
     * Swarm Secrets that are passed to the CSI storage plugin when
     * operating on this volume.
     *
     * @var list<ClusterVolumeSpecAccessModeSecretsItem>|null
     */
    public ?array $secrets;
    /**
     * Requirements for the accessible topology of the volume. These
     * fields are optional. For an in-depth description of what these
     * fields mean, see the CSI specification.
     *
     * @var ClusterVolumeSpecAccessModeAccessibilityRequirements|null
     */
    public ?ClusterVolumeSpecAccessModeAccessibilityRequirements $accessibilityRequirements;
    /**
     * The desired capacity that the volume should be created with. If
     * empty, the plugin will decide the capacity.
     *
     * @var ClusterVolumeSpecAccessModeCapacityRange|null
     */
    public ?ClusterVolumeSpecAccessModeCapacityRange $capacityRange;
    /**
     * The availability of the volume for use in tasks.
     * - `active` The volume is fully available for scheduling on the cluster
     * - `pause` No new workloads should use the volume, but existing workloads are not stopped.
     * - `drain` All workloads using this volume should be stopped and rescheduled, and no new ones should be started.
     *
     * @var ClusterVolumeSpecAccessModeAvailability
     */
    public ClusterVolumeSpecAccessModeAvailability $availability = 'active';

    public function definedProperties(): array
    {
        return ['scope' => 'Scope', 'sharing' => 'Sharing', 'mountVolume' => 'MountVolume', 'secrets' => 'Secrets', 'accessibilityRequirements' => 'AccessibilityRequirements', 'capacityRange' => 'CapacityRange', 'availability' => 'Availability'];
    }
}
