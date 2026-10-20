<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class Mount implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Container path.
     *
     * @var string|null
     */
    public ?string $target;
    /**
     * Mount source (e.g. a volume name, a host path). The source cannot be
     * specified when using `Type=tmpfs`. For `Type=bind`, the source path
     * must either exist, or the `CreateMountpoint` must be set to `true` to
     * create the source path on the host if missing.
     *
     * For `Type=npipe`, the pipe must exist prior to creating the container.
     *
     * @var string|null
     */
    public ?string $source;
    /**
     * The mount type. Available types:
     *
     * - `bind` Mounts a file or directory from the host into the container. The `Source` must exist prior to creating the container.
     * - `cluster` a Swarm cluster volume
     * - `image` Mounts an image.
     * - `npipe` Mounts a named pipe from the host into the container. The `Source` must exist prior to creating the container.
     * - `tmpfs` Create a tmpfs with the given options. The mount `Source` cannot be specified for tmpfs.
     * - `volume` Creates a volume with the given name and options (or uses a pre-existing volume with the same name and options). These are **not** removed when the container is removed.
     *
     * @var MountType
     */
    public MountType $type;
    /**
     * Whether the mount should be read-only.
     *
     * @var bool|null
     */
    public ?bool $readOnly;
    /**
     * The consistency requirement for the mount: `default`, `consistent`, `cached`, or `delegated`.
     *
     * @var string|null
     */
    public ?string $consistency;
    /**
     * Optional configuration for the `bind` type.
     *
     * @var MountBindOptions|null
     */
    public ?MountBindOptions $bindOptions;
    /**
     * Optional configuration for the `volume` type.
     *
     * @var MountVolumeOptions|null
     */
    public ?MountVolumeOptions $volumeOptions;
    /**
     * Optional configuration for the `image` type.
     *
     * @var MountImageOptions|null
     */
    public ?MountImageOptions $imageOptions;
    /**
     * Optional configuration for the `tmpfs` type.
     *
     * @var MountTmpfsOptions|null
     */
    public ?MountTmpfsOptions $tmpfsOptions;

    public function definedProperties(): array
    {
        return ['target' => 'Target', 'source' => 'Source', 'type' => 'Type', 'readOnly' => 'ReadOnly', 'consistency' => 'Consistency', 'bindOptions' => 'BindOptions', 'volumeOptions' => 'VolumeOptions', 'imageOptions' => 'ImageOptions', 'tmpfsOptions' => 'TmpfsOptions'];
    }
}
