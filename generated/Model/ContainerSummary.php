<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use ArrayObject;
use function array_key_exists;

class ContainerSummary extends ArrayObject
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
     * The ID of this container as a 128-bit (64-character) hexadecimal string (32 bytes).
     *
     * @var string
     */
    protected $id;
    /**
     * The names associated with this container. Most containers have a single
     * name, but when using legacy "links", the container can have multiple
     * names.
     *
     * For historic reasons, names are prefixed with a forward-slash (`/`).
     *
     * @var list<string>
     */
    protected $names;
    /**
     * The name or ID of the image used to create the container.
     *
     * This field shows the image reference as was specified when creating the container,
     * which can be in its canonical form (e.g., `docker.io/library/ubuntu:latest`
     * or `docker.io/library/ubuntu@sha256:72297848456d5d37d1262630108ab308d3e9ec7ed1c3286a32fe09856619a782`),
     * short form (e.g., `ubuntu:latest`)), or the ID(-prefix) of the image (e.g., `72297848456d`).
     *
     * The content of this field can be updated at runtime if the image used to
     * create the container is untagged, in which case the field is updated to
     * contain the the image ID (digest) it was resolved to in its canonical,
     * non-truncated form (e.g., `sha256:72297848456d5d37d1262630108ab308d3e9ec7ed1c3286a32fe09856619a782`).
     *
     * @var string
     */
    protected $image;
    /**
     * The ID (digest) of the image that this container was created from.
     *
     * @var string
     */
    protected $imageID;
    /**
     * A descriptor struct containing digest, media type, and size, as defined in
     * the [OCI Content Descriptors Specification](https://github.com/opencontainers/image-spec/blob/v1.0.1/descriptor.md).
     *
     * @var OCIDescriptor
     */
    protected $imageManifestDescriptor;
    /**
     * Command to run when starting the container.
     *
     * @var string
     */
    protected $command;
    /**
     * Date and time at which the container was created as a Unix timestamp
     * (number of seconds since EPOCH).
     *
     * @var int
     */
    protected $created;
    /**
     * Port-mappings for the container.
     *
     * @var list<Port>|null
     */
    protected $ports;
    /**
     * The size of files that have been created or changed by this container.
     *
     * This field is omitted by default, and only set when size is requested
     * in the API request.
     *
     * @var int|null
     */
    protected $sizeRw;
    /**
     * The total size of all files in the read-only layers from the image
     * that the container uses. These layers can be shared between containers.
     *
     * This field is omitted by default, and only set when size is requested
     * in the API request.
     *
     * @var int|null
     */
    protected $sizeRootFs;
    /**
     * User-defined key/value metadata.
     *
     * @var array<string, string>
     */
    protected $labels;
    /**
     * The state of this container.
     *
     * @var string
     */
    protected $state;
    /**
     * Additional human-readable status of this container (e.g. `Exit 0`).
     *
     * @var string
     */
    protected $status;
    /**
     * Summary of host-specific runtime information of the container. This
     * is a reduced set of information in the container's "HostConfig" as
     * available in the container "inspect" response.
     *
     * @var ContainerSummaryHostConfig
     */
    protected $hostConfig;
    /**
     * Summary of the container's network settings.
     *
     * @var ContainerSummaryNetworkSettings
     */
    protected $networkSettings;
    /**
     * List of mounts used by the container.
     *
     * @var list<MountPoint>
     */
    protected $mounts;

    /**
     * The ID of this container as a 128-bit (64-character) hexadecimal string (32 bytes).
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * The ID of this container as a 128-bit (64-character) hexadecimal string (32 bytes).
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id                = $id;

        return $this;
    }

    /**
     * The names associated with this container. Most containers have a single
     * name, but when using legacy "links", the container can have multiple
     * names.
     *
     * For historic reasons, names are prefixed with a forward-slash (`/`).
     *
     * @return list<string>
     */
    public function getNames(): array
    {
        return $this->names;
    }

    /**
     * The names associated with this container. Most containers have a single
     * name, but when using legacy "links", the container can have multiple
     * names.
     *
     * For historic reasons, names are prefixed with a forward-slash (`/`).
     *
     * @param list<string> $names
     *
     * @return self
     */
    public function setNames(array $names): self
    {
        $this->initialized['names'] = true;
        $this->names                = $names;

        return $this;
    }

    /**
     * The name or ID of the image used to create the container.
     *
     * This field shows the image reference as was specified when creating the container,
     * which can be in its canonical form (e.g., `docker.io/library/ubuntu:latest`
     * or `docker.io/library/ubuntu@sha256:72297848456d5d37d1262630108ab308d3e9ec7ed1c3286a32fe09856619a782`),
     * short form (e.g., `ubuntu:latest`)), or the ID(-prefix) of the image (e.g., `72297848456d`).
     *
     * The content of this field can be updated at runtime if the image used to
     * create the container is untagged, in which case the field is updated to
     * contain the the image ID (digest) it was resolved to in its canonical,
     * non-truncated form (e.g., `sha256:72297848456d5d37d1262630108ab308d3e9ec7ed1c3286a32fe09856619a782`).
     *
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * The name or ID of the image used to create the container.
     *
     * This field shows the image reference as was specified when creating the container,
     * which can be in its canonical form (e.g., `docker.io/library/ubuntu:latest`
     * or `docker.io/library/ubuntu@sha256:72297848456d5d37d1262630108ab308d3e9ec7ed1c3286a32fe09856619a782`),
     * short form (e.g., `ubuntu:latest`)), or the ID(-prefix) of the image (e.g., `72297848456d`).
     *
     * The content of this field can be updated at runtime if the image used to
     * create the container is untagged, in which case the field is updated to
     * contain the the image ID (digest) it was resolved to in its canonical,
     * non-truncated form (e.g., `sha256:72297848456d5d37d1262630108ab308d3e9ec7ed1c3286a32fe09856619a782`).
     *
     * @param string $image
     *
     * @return self
     */
    public function setImage(string $image): self
    {
        $this->initialized['image'] = true;
        $this->image                = $image;

        return $this;
    }

    /**
     * The ID (digest) of the image that this container was created from.
     *
     * @return string
     */
    public function getImageID(): string
    {
        return $this->imageID;
    }

    /**
     * The ID (digest) of the image that this container was created from.
     *
     * @param string $imageID
     *
     * @return self
     */
    public function setImageID(string $imageID): self
    {
        $this->initialized['imageID'] = true;
        $this->imageID                = $imageID;

        return $this;
    }

    /**
     * A descriptor struct containing digest, media type, and size, as defined in
     * the [OCI Content Descriptors Specification](https://github.com/opencontainers/image-spec/blob/v1.0.1/descriptor.md).
     *
     * @return OCIDescriptor
     */
    public function getImageManifestDescriptor(): OCIDescriptor
    {
        return $this->imageManifestDescriptor;
    }

    /**
     * A descriptor struct containing digest, media type, and size, as defined in
     * the [OCI Content Descriptors Specification](https://github.com/opencontainers/image-spec/blob/v1.0.1/descriptor.md).
     *
     * @param OCIDescriptor $imageManifestDescriptor
     *
     * @return self
     */
    public function setImageManifestDescriptor(OCIDescriptor $imageManifestDescriptor): self
    {
        $this->initialized['imageManifestDescriptor'] = true;
        $this->imageManifestDescriptor                = $imageManifestDescriptor;

        return $this;
    }

    /**
     * Command to run when starting the container.
     *
     * @return string
     */
    public function getCommand(): string
    {
        return $this->command;
    }

    /**
     * Command to run when starting the container.
     *
     * @param string $command
     *
     * @return self
     */
    public function setCommand(string $command): self
    {
        $this->initialized['command'] = true;
        $this->command                = $command;

        return $this;
    }

    /**
     * Date and time at which the container was created as a Unix timestamp
     * (number of seconds since EPOCH).
     *
     * @return int
     */
    public function getCreated(): int
    {
        return $this->created;
    }

    /**
     * Date and time at which the container was created as a Unix timestamp
     * (number of seconds since EPOCH).
     *
     * @param int $created
     *
     * @return self
     */
    public function setCreated(int $created): self
    {
        $this->initialized['created'] = true;
        $this->created                = $created;

        return $this;
    }

    /**
     * Port-mappings for the container.
     *
     * @return list<Port>|null
     */
    public function getPorts(): ?array
    {
        return $this->ports;
    }

    /**
     * Port-mappings for the container.
     *
     * @param list<Port>|null $ports
     *
     * @return self
     */
    public function setPorts(?array $ports): self
    {
        $this->initialized['ports'] = true;
        $this->ports                = $ports;

        return $this;
    }

    /**
     * The size of files that have been created or changed by this container.
     *
     * This field is omitted by default, and only set when size is requested
     * in the API request.
     *
     * @return int|null
     */
    public function getSizeRw(): ?int
    {
        return $this->sizeRw;
    }

    /**
     * The size of files that have been created or changed by this container.
     *
     * This field is omitted by default, and only set when size is requested
     * in the API request.
     *
     * @param int|null $sizeRw
     *
     * @return self
     */
    public function setSizeRw(?int $sizeRw): self
    {
        $this->initialized['sizeRw'] = true;
        $this->sizeRw                = $sizeRw;

        return $this;
    }

    /**
     * The total size of all files in the read-only layers from the image
     * that the container uses. These layers can be shared between containers.
     *
     * This field is omitted by default, and only set when size is requested
     * in the API request.
     *
     * @return int|null
     */
    public function getSizeRootFs(): ?int
    {
        return $this->sizeRootFs;
    }

    /**
     * The total size of all files in the read-only layers from the image
     * that the container uses. These layers can be shared between containers.
     *
     * This field is omitted by default, and only set when size is requested
     * in the API request.
     *
     * @param int|null $sizeRootFs
     *
     * @return self
     */
    public function setSizeRootFs(?int $sizeRootFs): self
    {
        $this->initialized['sizeRootFs'] = true;
        $this->sizeRootFs                = $sizeRootFs;

        return $this;
    }

    /**
     * User-defined key/value metadata.
     *
     * @return array<string, string>
     */
    public function getLabels(): iterable
    {
        return $this->labels;
    }

    /**
     * User-defined key/value metadata.
     *
     * @param array<string, string> $labels
     *
     * @return self
     */
    public function setLabels(iterable $labels): self
    {
        $this->initialized['labels'] = true;
        $this->labels                = $labels;

        return $this;
    }

    /**
     * The state of this container.
     *
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * The state of this container.
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state): self
    {
        $this->initialized['state'] = true;
        $this->state                = $state;

        return $this;
    }

    /**
     * Additional human-readable status of this container (e.g. `Exit 0`).
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * Additional human-readable status of this container (e.g. `Exit 0`).
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status                = $status;

        return $this;
    }

    /**
     * Summary of host-specific runtime information of the container. This
     * is a reduced set of information in the container's "HostConfig" as
     * available in the container "inspect" response.
     *
     * @return ContainerSummaryHostConfig
     */
    public function getHostConfig(): ContainerSummaryHostConfig
    {
        return $this->hostConfig;
    }

    /**
     * Summary of host-specific runtime information of the container. This
     * is a reduced set of information in the container's "HostConfig" as
     * available in the container "inspect" response.
     *
     * @param ContainerSummaryHostConfig $hostConfig
     *
     * @return self
     */
    public function setHostConfig(ContainerSummaryHostConfig $hostConfig): self
    {
        $this->initialized['hostConfig'] = true;
        $this->hostConfig                = $hostConfig;

        return $this;
    }

    /**
     * Summary of the container's network settings.
     *
     * @return ContainerSummaryNetworkSettings
     */
    public function getNetworkSettings(): ContainerSummaryNetworkSettings
    {
        return $this->networkSettings;
    }

    /**
     * Summary of the container's network settings.
     *
     * @param ContainerSummaryNetworkSettings $networkSettings
     *
     * @return self
     */
    public function setNetworkSettings(ContainerSummaryNetworkSettings $networkSettings): self
    {
        $this->initialized['networkSettings'] = true;
        $this->networkSettings                = $networkSettings;

        return $this;
    }

    /**
     * List of mounts used by the container.
     *
     * @return list<MountPoint>
     */
    public function getMounts(): array
    {
        return $this->mounts;
    }

    /**
     * List of mounts used by the container.
     *
     * @param list<MountPoint> $mounts
     *
     * @return self
     */
    public function setMounts(array $mounts): self
    {
        $this->initialized['mounts'] = true;
        $this->mounts                = $mounts;

        return $this;
    }
}
