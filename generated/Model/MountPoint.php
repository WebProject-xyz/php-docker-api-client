<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class MountPoint implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The mount type:
     *
     * - `bind` a mount of a file or directory from the host into the container.
     * - `cluster` a Swarm cluster volume.
     * - `image` an OCI image.
     * - `npipe` a named pipe from the host into the container.
     * - `tmpfs` a `tmpfs`.
     * - `volume` a docker volume with the given `Name`.
     *
     * @var MountType
     */
    public MountType $type;
    /**
     * Name is the name reference to the underlying data defined by `Source`
     * e.g., the volume name.
     *
     * @var string|null
     */
    public ?string $name;
    /**
     * Source location of the mount.
     *
     * For volumes, this contains the storage location of the volume (within
     * `/var/lib/docker/volumes/`). For bind-mounts, and `npipe`, this contains
     * the source (host) part of the bind-mount. For `tmpfs` mount points, this
     * field is empty.
     *
     * @var string|null
     */
    public ?string $source;
    /**
     * Destination is the path relative to the container root (`/`) where
     * the `Source` is mounted inside the container.
     *
     * @var string|null
     */
    public ?string $destination;
    /**
     * Driver is the volume driver used to create the volume (if it is a volume).
     *
     * @var string|null
     */
    public ?string $driver;
    /**
     * Mode is a comma separated list of options supplied by the user when
     * creating the bind/volume mount.
     *
     * The default is platform-specific (`"z"` on Linux, empty on Windows).
     *
     * @var string|null
     */
    public ?string $mode;
    /**
     * Whether the mount is mounted writable (read-write).
     *
     * @var bool|null
     */
    public ?bool $rW;
    /**
     * Propagation describes how mounts are propagated from the host into the
     * mount point, and vice-versa. Refer to the [Linux kernel documentation](https://www.kernel.org/doc/Documentation/filesystems/sharedsubtree.txt)
     * for details. This field is not used on Windows.
     *
     * @var string|null
     */
    public ?string $propagation;

    public function definedProperties(): array
    {
        return ['type' => 'Type', 'name' => 'Name', 'source' => 'Source', 'destination' => 'Destination', 'driver' => 'Driver', 'mode' => 'Mode', 'rW' => 'RW', 'propagation' => 'Propagation'];
    }
}
