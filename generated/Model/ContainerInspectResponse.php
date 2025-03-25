<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use ArrayObject;
use function array_key_exists;

class ContainerInspectResponse extends ArrayObject
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
     * Date and time at which the container was created, formatted in
     * [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
     *
     * @var string|null
     */
    protected $created;
    /**
     * The path to the command being run.
     *
     * @var string
     */
    protected $path;
    /**
     * The arguments to the command being run.
     *
     * @var list<string>
     */
    protected $args;
    /**
     * ContainerState stores container's running state. It's part of ContainerJSONBase
     * and will be returned by the "inspect" command.
     *
     * @var ContainerState|null
     */
    protected $state;
    /**
     * The ID (digest) of the image that this container was created from.
     *
     * @var string
     */
    protected $image;
    /**
     * Location of the `/etc/resolv.conf` generated for the container on the
     * host.
     *
     * This file is managed through the docker daemon, and should not be
     * accessed or modified by other tools.
     *
     * @var string
     */
    protected $resolvConfPath;
    /**
     * Location of the `/etc/hostname` generated for the container on the
     * host.
     *
     * This file is managed through the docker daemon, and should not be
     * accessed or modified by other tools.
     *
     * @var string
     */
    protected $hostnamePath;
    /**
     * Location of the `/etc/hosts` generated for the container on the
     * host.
     *
     * This file is managed through the docker daemon, and should not be
     * accessed or modified by other tools.
     *
     * @var string
     */
    protected $hostsPath;
    /**
     * Location of the file used to buffer the container's logs. Depending on
     * the logging-driver used for the container, this field may be omitted.
     *
     * This file is managed through the docker daemon, and should not be
     * accessed or modified by other tools.
     *
     * @var string|null
     */
    protected $logPath;
    /**
     * The name associated with this container.
     *
     * For historic reasons, the name may be prefixed with a forward-slash (`/`).
     *
     * @var string
     */
    protected $name;
    /**
     * Number of times the container was restarted since it was created,
     * or since daemon was started.
     *
     * @var int
     */
    protected $restartCount;
    /**
     * The storage-driver used for the container's filesystem (graph-driver
     * or snapshotter).
     *
     * @var string
     */
    protected $driver;
    /**
     * The platform (operating system) for which the container was created.
     *
     * This field was introduced for the experimental "LCOW" (Linux Containers
     * On Windows) features, which has been removed. In most cases, this field
     * is equal to the host's operating system (`linux` or `windows`).
     *
     * @var string
     */
    protected $platform;
    /**
     * A descriptor struct containing digest, media type, and size, as defined in
     * the [OCI Content Descriptors Specification](https://github.com/opencontainers/image-spec/blob/v1.0.1/descriptor.md).
     *
     * @var OCIDescriptor
     */
    protected $imageManifestDescriptor;
    /**
     * SELinux mount label set for the container.
     *
     * @var string
     */
    protected $mountLabel;
    /**
     * SELinux process label set for the container.
     *
     * @var string
     */
    protected $processLabel;
    /**
     * The AppArmor profile set for the container.
     *
     * @var string
     */
    protected $appArmorProfile;
    /**
     * IDs of exec instances that are running in the container.
     *
     * @var list<string>|null
     */
    protected $execIDs;
    /**
     * Container configuration that depends on the host we are running on.
     *
     * @var HostConfig
     */
    protected $hostConfig;
    /**
     * Information about the storage driver used to store the container's and
     * image's filesystem.
     *
     * @var DriverData
     */
    protected $graphDriver;
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
     * List of mounts used by the container.
     *
     * @var list<MountPoint>
     */
    protected $mounts;
    /**
     * Configuration for a container that is portable between hosts.
     *
     * @var ContainerConfig
     */
    protected $config;
    /**
     * NetworkSettings exposes the network settings in the API.
     *
     * @var NetworkSettings
     */
    protected $networkSettings;

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
     * Date and time at which the container was created, formatted in
     * [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
     *
     * @return string|null
     */
    public function getCreated(): ?string
    {
        return $this->created;
    }

    /**
     * Date and time at which the container was created, formatted in
     * [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
     *
     * @param string|null $created
     *
     * @return self
     */
    public function setCreated(?string $created): self
    {
        $this->initialized['created'] = true;
        $this->created                = $created;

        return $this;
    }

    /**
     * The path to the command being run.
     *
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * The path to the command being run.
     *
     * @param string $path
     *
     * @return self
     */
    public function setPath(string $path): self
    {
        $this->initialized['path'] = true;
        $this->path                = $path;

        return $this;
    }

    /**
     * The arguments to the command being run.
     *
     * @return list<string>
     */
    public function getArgs(): array
    {
        return $this->args;
    }

    /**
     * The arguments to the command being run.
     *
     * @param list<string> $args
     *
     * @return self
     */
    public function setArgs(array $args): self
    {
        $this->initialized['args'] = true;
        $this->args                = $args;

        return $this;
    }

    /**
     * ContainerState stores container's running state. It's part of ContainerJSONBase
     * and will be returned by the "inspect" command.
     *
     * @return ContainerState|null
     */
    public function getState(): ?ContainerState
    {
        return $this->state;
    }

    /**
     * ContainerState stores container's running state. It's part of ContainerJSONBase
     * and will be returned by the "inspect" command.
     *
     * @param ContainerState|null $state
     *
     * @return self
     */
    public function setState(?ContainerState $state): self
    {
        $this->initialized['state'] = true;
        $this->state                = $state;

        return $this;
    }

    /**
     * The ID (digest) of the image that this container was created from.
     *
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * The ID (digest) of the image that this container was created from.
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
     * Location of the `/etc/resolv.conf` generated for the container on the
     * host.
     *
     * This file is managed through the docker daemon, and should not be
     * accessed or modified by other tools.
     *
     * @return string
     */
    public function getResolvConfPath(): string
    {
        return $this->resolvConfPath;
    }

    /**
     * Location of the `/etc/resolv.conf` generated for the container on the
     * host.
     *
     * This file is managed through the docker daemon, and should not be
     * accessed or modified by other tools.
     *
     * @param string $resolvConfPath
     *
     * @return self
     */
    public function setResolvConfPath(string $resolvConfPath): self
    {
        $this->initialized['resolvConfPath'] = true;
        $this->resolvConfPath                = $resolvConfPath;

        return $this;
    }

    /**
     * Location of the `/etc/hostname` generated for the container on the
     * host.
     *
     * This file is managed through the docker daemon, and should not be
     * accessed or modified by other tools.
     *
     * @return string
     */
    public function getHostnamePath(): string
    {
        return $this->hostnamePath;
    }

    /**
     * Location of the `/etc/hostname` generated for the container on the
     * host.
     *
     * This file is managed through the docker daemon, and should not be
     * accessed or modified by other tools.
     *
     * @param string $hostnamePath
     *
     * @return self
     */
    public function setHostnamePath(string $hostnamePath): self
    {
        $this->initialized['hostnamePath'] = true;
        $this->hostnamePath                = $hostnamePath;

        return $this;
    }

    /**
     * Location of the `/etc/hosts` generated for the container on the
     * host.
     *
     * This file is managed through the docker daemon, and should not be
     * accessed or modified by other tools.
     *
     * @return string
     */
    public function getHostsPath(): string
    {
        return $this->hostsPath;
    }

    /**
     * Location of the `/etc/hosts` generated for the container on the
     * host.
     *
     * This file is managed through the docker daemon, and should not be
     * accessed or modified by other tools.
     *
     * @param string $hostsPath
     *
     * @return self
     */
    public function setHostsPath(string $hostsPath): self
    {
        $this->initialized['hostsPath'] = true;
        $this->hostsPath                = $hostsPath;

        return $this;
    }

    /**
     * Location of the file used to buffer the container's logs. Depending on
     * the logging-driver used for the container, this field may be omitted.
     *
     * This file is managed through the docker daemon, and should not be
     * accessed or modified by other tools.
     *
     * @return string|null
     */
    public function getLogPath(): ?string
    {
        return $this->logPath;
    }

    /**
     * Location of the file used to buffer the container's logs. Depending on
     * the logging-driver used for the container, this field may be omitted.
     *
     * This file is managed through the docker daemon, and should not be
     * accessed or modified by other tools.
     *
     * @param string|null $logPath
     *
     * @return self
     */
    public function setLogPath(?string $logPath): self
    {
        $this->initialized['logPath'] = true;
        $this->logPath                = $logPath;

        return $this;
    }

    /**
     * The name associated with this container.
     *
     * For historic reasons, the name may be prefixed with a forward-slash (`/`).
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * The name associated with this container.
     *
     * For historic reasons, the name may be prefixed with a forward-slash (`/`).
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name                = $name;

        return $this;
    }

    /**
     * Number of times the container was restarted since it was created,
     * or since daemon was started.
     *
     * @return int
     */
    public function getRestartCount(): int
    {
        return $this->restartCount;
    }

    /**
     * Number of times the container was restarted since it was created,
     * or since daemon was started.
     *
     * @param int $restartCount
     *
     * @return self
     */
    public function setRestartCount(int $restartCount): self
    {
        $this->initialized['restartCount'] = true;
        $this->restartCount                = $restartCount;

        return $this;
    }

    /**
     * The storage-driver used for the container's filesystem (graph-driver
     * or snapshotter).
     *
     * @return string
     */
    public function getDriver(): string
    {
        return $this->driver;
    }

    /**
     * The storage-driver used for the container's filesystem (graph-driver
     * or snapshotter).
     *
     * @param string $driver
     *
     * @return self
     */
    public function setDriver(string $driver): self
    {
        $this->initialized['driver'] = true;
        $this->driver                = $driver;

        return $this;
    }

    /**
     * The platform (operating system) for which the container was created.
     *
     * This field was introduced for the experimental "LCOW" (Linux Containers
     * On Windows) features, which has been removed. In most cases, this field
     * is equal to the host's operating system (`linux` or `windows`).
     *
     * @return string
     */
    public function getPlatform(): string
    {
        return $this->platform;
    }

    /**
     * The platform (operating system) for which the container was created.
     *
     * This field was introduced for the experimental "LCOW" (Linux Containers
     * On Windows) features, which has been removed. In most cases, this field
     * is equal to the host's operating system (`linux` or `windows`).
     *
     * @param string $platform
     *
     * @return self
     */
    public function setPlatform(string $platform): self
    {
        $this->initialized['platform'] = true;
        $this->platform                = $platform;

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
     * SELinux mount label set for the container.
     *
     * @return string
     */
    public function getMountLabel(): string
    {
        return $this->mountLabel;
    }

    /**
     * SELinux mount label set for the container.
     *
     * @param string $mountLabel
     *
     * @return self
     */
    public function setMountLabel(string $mountLabel): self
    {
        $this->initialized['mountLabel'] = true;
        $this->mountLabel                = $mountLabel;

        return $this;
    }

    /**
     * SELinux process label set for the container.
     *
     * @return string
     */
    public function getProcessLabel(): string
    {
        return $this->processLabel;
    }

    /**
     * SELinux process label set for the container.
     *
     * @param string $processLabel
     *
     * @return self
     */
    public function setProcessLabel(string $processLabel): self
    {
        $this->initialized['processLabel'] = true;
        $this->processLabel                = $processLabel;

        return $this;
    }

    /**
     * The AppArmor profile set for the container.
     *
     * @return string
     */
    public function getAppArmorProfile(): string
    {
        return $this->appArmorProfile;
    }

    /**
     * The AppArmor profile set for the container.
     *
     * @param string $appArmorProfile
     *
     * @return self
     */
    public function setAppArmorProfile(string $appArmorProfile): self
    {
        $this->initialized['appArmorProfile'] = true;
        $this->appArmorProfile                = $appArmorProfile;

        return $this;
    }

    /**
     * IDs of exec instances that are running in the container.
     *
     * @return list<string>|null
     */
    public function getExecIDs(): ?array
    {
        return $this->execIDs;
    }

    /**
     * IDs of exec instances that are running in the container.
     *
     * @param list<string>|null $execIDs
     *
     * @return self
     */
    public function setExecIDs(?array $execIDs): self
    {
        $this->initialized['execIDs'] = true;
        $this->execIDs                = $execIDs;

        return $this;
    }

    /**
     * Container configuration that depends on the host we are running on.
     *
     * @return HostConfig
     */
    public function getHostConfig(): HostConfig
    {
        return $this->hostConfig;
    }

    /**
     * Container configuration that depends on the host we are running on.
     *
     * @param HostConfig $hostConfig
     *
     * @return self
     */
    public function setHostConfig(HostConfig $hostConfig): self
    {
        $this->initialized['hostConfig'] = true;
        $this->hostConfig                = $hostConfig;

        return $this;
    }

    /**
     * Information about the storage driver used to store the container's and
     * image's filesystem.
     *
     * @return DriverData
     */
    public function getGraphDriver(): DriverData
    {
        return $this->graphDriver;
    }

    /**
     * Information about the storage driver used to store the container's and
     * image's filesystem.
     *
     * @param DriverData $graphDriver
     *
     * @return self
     */
    public function setGraphDriver(DriverData $graphDriver): self
    {
        $this->initialized['graphDriver'] = true;
        $this->graphDriver                = $graphDriver;

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

    /**
     * Configuration for a container that is portable between hosts.
     *
     * @return ContainerConfig
     */
    public function getConfig(): ContainerConfig
    {
        return $this->config;
    }

    /**
     * Configuration for a container that is portable between hosts.
     *
     * @param ContainerConfig $config
     *
     * @return self
     */
    public function setConfig(ContainerConfig $config): self
    {
        $this->initialized['config'] = true;
        $this->config                = $config;

        return $this;
    }

    /**
     * NetworkSettings exposes the network settings in the API.
     *
     * @return NetworkSettings
     */
    public function getNetworkSettings(): NetworkSettings
    {
        return $this->networkSettings;
    }

    /**
     * NetworkSettings exposes the network settings in the API.
     *
     * @param NetworkSettings $networkSettings
     *
     * @return self
     */
    public function setNetworkSettings(NetworkSettings $networkSettings): self
    {
        $this->initialized['networkSettings'] = true;
        $this->networkSettings                = $networkSettings;

        return $this;
    }
}
