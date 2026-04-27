<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use function array_key_exists;

class Mount
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
     * Container path.
     *
     * @var string|null
     */
    protected $target;
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
    protected $source;
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
     * @var string
     */
    protected $type;
    /**
     * Whether the mount should be read-only.
     *
     * @var bool|null
     */
    protected $readOnly;
    /**
     * The consistency requirement for the mount: `default`, `consistent`, `cached`, or `delegated`.
     *
     * @var string|null
     */
    protected $consistency;
    /**
     * Optional configuration for the `bind` type.
     *
     * @var MountBindOptions|null
     */
    protected $bindOptions;
    /**
     * Optional configuration for the `volume` type.
     *
     * @var MountVolumeOptions|null
     */
    protected $volumeOptions;
    /**
     * Optional configuration for the `image` type.
     *
     * @var MountImageOptions|null
     */
    protected $imageOptions;
    /**
     * Optional configuration for the `tmpfs` type.
     *
     * @var MountTmpfsOptions|null
     */
    protected $tmpfsOptions;

    /**
     * Container path.
     *
     * @return string|null
     */
    public function getTarget(): ?string
    {
        return $this->target;
    }

    /**
     * Container path.
     *
     * @param string|null $target
     *
     * @return self
     */
    public function setTarget(?string $target): self
    {
        $this->initialized['target'] = true;
        $this->target                = $target;

        return $this;
    }

    /**
     * Mount source (e.g. a volume name, a host path). The source cannot be
     * specified when using `Type=tmpfs`. For `Type=bind`, the source path
     * must either exist, or the `CreateMountpoint` must be set to `true` to
     * create the source path on the host if missing.
     *
     * For `Type=npipe`, the pipe must exist prior to creating the container.
     *
     * @return string|null
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * Mount source (e.g. a volume name, a host path). The source cannot be
     * specified when using `Type=tmpfs`. For `Type=bind`, the source path
     * must either exist, or the `CreateMountpoint` must be set to `true` to
     * create the source path on the host if missing.
     *
     * For `Type=npipe`, the pipe must exist prior to creating the container.
     *
     * @param string|null $source
     *
     * @return self
     */
    public function setSource(?string $source): self
    {
        $this->initialized['source'] = true;
        $this->source                = $source;

        return $this;
    }

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
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

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
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type                = $type;

        return $this;
    }

    /**
     * Whether the mount should be read-only.
     *
     * @return bool|null
     */
    public function getReadOnly(): ?bool
    {
        return $this->readOnly;
    }

    /**
     * Whether the mount should be read-only.
     *
     * @param bool|null $readOnly
     *
     * @return self
     */
    public function setReadOnly(?bool $readOnly): self
    {
        $this->initialized['readOnly'] = true;
        $this->readOnly                = $readOnly;

        return $this;
    }

    /**
     * The consistency requirement for the mount: `default`, `consistent`, `cached`, or `delegated`.
     *
     * @return string|null
     */
    public function getConsistency(): ?string
    {
        return $this->consistency;
    }

    /**
     * The consistency requirement for the mount: `default`, `consistent`, `cached`, or `delegated`.
     *
     * @param string|null $consistency
     *
     * @return self
     */
    public function setConsistency(?string $consistency): self
    {
        $this->initialized['consistency'] = true;
        $this->consistency                = $consistency;

        return $this;
    }

    /**
     * Optional configuration for the `bind` type.
     *
     * @return MountBindOptions|null
     */
    public function getBindOptions(): ?MountBindOptions
    {
        return $this->bindOptions;
    }

    /**
     * Optional configuration for the `bind` type.
     *
     * @param MountBindOptions|null $bindOptions
     *
     * @return self
     */
    public function setBindOptions(?MountBindOptions $bindOptions): self
    {
        $this->initialized['bindOptions'] = true;
        $this->bindOptions                = $bindOptions;

        return $this;
    }

    /**
     * Optional configuration for the `volume` type.
     *
     * @return MountVolumeOptions|null
     */
    public function getVolumeOptions(): ?MountVolumeOptions
    {
        return $this->volumeOptions;
    }

    /**
     * Optional configuration for the `volume` type.
     *
     * @param MountVolumeOptions|null $volumeOptions
     *
     * @return self
     */
    public function setVolumeOptions(?MountVolumeOptions $volumeOptions): self
    {
        $this->initialized['volumeOptions'] = true;
        $this->volumeOptions                = $volumeOptions;

        return $this;
    }

    /**
     * Optional configuration for the `image` type.
     *
     * @return MountImageOptions|null
     */
    public function getImageOptions(): ?MountImageOptions
    {
        return $this->imageOptions;
    }

    /**
     * Optional configuration for the `image` type.
     *
     * @param MountImageOptions|null $imageOptions
     *
     * @return self
     */
    public function setImageOptions(?MountImageOptions $imageOptions): self
    {
        $this->initialized['imageOptions'] = true;
        $this->imageOptions                = $imageOptions;

        return $this;
    }

    /**
     * Optional configuration for the `tmpfs` type.
     *
     * @return MountTmpfsOptions|null
     */
    public function getTmpfsOptions(): ?MountTmpfsOptions
    {
        return $this->tmpfsOptions;
    }

    /**
     * Optional configuration for the `tmpfs` type.
     *
     * @param MountTmpfsOptions|null $tmpfsOptions
     *
     * @return self
     */
    public function setTmpfsOptions(?MountTmpfsOptions $tmpfsOptions): self
    {
        $this->initialized['tmpfsOptions'] = true;
        $this->tmpfsOptions                = $tmpfsOptions;

        return $this;
    }
}
