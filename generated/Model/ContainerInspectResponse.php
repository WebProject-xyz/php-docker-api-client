<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use DateTimeInterface;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ContainerInspectResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The ID of this container as a 128-bit (64-character) hexadecimal string (32 bytes).
     *
     * @var string|null
     */
    public ?string $id;
    /**
     * Date and time at which the container was created, formatted in
     * [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
     *
     * @var DateTimeInterface|null
     */
    public ?DateTimeInterface $created;
    /**
     * The path to the command being run.
     *
     * @var string|null
     */
    public ?string $path;
    /**
     * The arguments to the command being run.
     *
     * @var list<string>|null
     */
    public ?array $args;
    /**
     * ContainerState stores container's running state. It's part of ContainerJSONBase
     * and will be returned by the "inspect" command.
     *
     * @var ContainerState|null
     */
    public ?ContainerState $state;
    /**
     * The ID (digest) of the image that this container was created from.
     *
     * @var string|null
     */
    public ?string $image;
    /**
     * Location of the `/etc/resolv.conf` generated for the container on the
     * host.
     *
     * This file is managed through the docker daemon, and should not be
     * accessed or modified by other tools.
     *
     * @var string|null
     */
    public ?string $resolvConfPath;
    /**
     * Location of the `/etc/hostname` generated for the container on the
     * host.
     *
     * This file is managed through the docker daemon, and should not be
     * accessed or modified by other tools.
     *
     * @var string|null
     */
    public ?string $hostnamePath;
    /**
     * Location of the `/etc/hosts` generated for the container on the
     * host.
     *
     * This file is managed through the docker daemon, and should not be
     * accessed or modified by other tools.
     *
     * @var string|null
     */
    public ?string $hostsPath;
    /**
     * Location of the file used to buffer the container's logs. Depending on
     * the logging-driver used for the container, this field may be omitted.
     *
     * This file is managed through the docker daemon, and should not be
     * accessed or modified by other tools.
     *
     * @var string|null
     */
    public ?string $logPath;
    /**
     * The name associated with this container.
     *
     * For historic reasons, the name may be prefixed with a forward-slash (`/`).
     *
     * @var string|null
     */
    public ?string $name;
    /**
     * Number of times the container was restarted since it was created,
     * or since daemon was started.
     *
     * @var int|null
     */
    public ?int $restartCount;
    /**
     * The storage-driver used for the container's filesystem (graph-driver
     * or snapshotter).
     *
     * @var string|null
     */
    public ?string $driver;
    /**
     * The platform (operating system) for which the container was created.
     *
     * This field was introduced for the experimental "LCOW" (Linux Containers
     * On Windows) features, which has been removed. In most cases, this field
     * is equal to the host's operating system (`linux` or `windows`).
     *
     * @var string|null
     */
    public ?string $platform;
    /**
     * A descriptor struct containing digest, media type, and size, as defined in
     * the [OCI Content Descriptors Specification](https://github.com/opencontainers/image-spec/blob/v1.0.1/descriptor.md).
     *
     * @var OCIDescriptor
     */
    public OCIDescriptor $imageManifestDescriptor;
    /**
     * SELinux mount label set for the container.
     *
     * @var string|null
     */
    public ?string $mountLabel;
    /**
     * SELinux process label set for the container.
     *
     * @var string|null
     */
    public ?string $processLabel;
    /**
     * The AppArmor profile set for the container.
     *
     * @var string|null
     */
    public ?string $appArmorProfile;
    /**
     * IDs of exec instances that are running in the container.
     *
     * @var list<string>|null
     */
    public ?array $execIDs;
    /**
     * Container configuration that depends on the host we are running on.
     *
     * @var HostConfig
     */
    public HostConfig $hostConfig;
    /**
     * Information about the storage driver used to store the container's and
     * image's filesystem.
     *
     * @var DriverData
     */
    public DriverData $graphDriver;
    /**
     * Information about the storage used by the container.
     *
     * @var Storage
     */
    public Storage $storage;
    /**
     * The size of files that have been created or changed by this container.
     *
     * This field is omitted by default, and only set when size is requested
     * in the API request.
     *
     * @var int|null
     */
    public ?int $sizeRw;
    /**
     * The total size of all files in the read-only layers from the image
     * that the container uses. These layers can be shared between containers.
     *
     * This field is omitted by default, and only set when size is requested
     * in the API request.
     *
     * @var int|null
     */
    public ?int $sizeRootFs;
    /**
     * List of mounts used by the container.
     *
     * @var list<MountPoint>|null
     */
    public ?array $mounts;
    /**
     * Configuration for a container that is portable between hosts.
     *
     * @var ContainerConfig
     */
    public ContainerConfig $config;
    /**
     * NetworkSettings exposes the network settings in the API.
     *
     * @var NetworkSettings
     */
    public NetworkSettings $networkSettings;

    public function definedProperties(): array
    {
        return ['id' => 'Id', 'created' => 'Created', 'path' => 'Path', 'args' => 'Args', 'state' => 'State', 'image' => 'Image', 'resolvConfPath' => 'ResolvConfPath', 'hostnamePath' => 'HostnamePath', 'hostsPath' => 'HostsPath', 'logPath' => 'LogPath', 'name' => 'Name', 'restartCount' => 'RestartCount', 'driver' => 'Driver', 'platform' => 'Platform', 'imageManifestDescriptor' => 'ImageManifestDescriptor', 'mountLabel' => 'MountLabel', 'processLabel' => 'ProcessLabel', 'appArmorProfile' => 'AppArmorProfile', 'execIDs' => 'ExecIDs', 'hostConfig' => 'HostConfig', 'graphDriver' => 'GraphDriver', 'storage' => 'Storage', 'sizeRw' => 'SizeRw', 'sizeRootFs' => 'SizeRootFs', 'mounts' => 'Mounts', 'config' => 'Config', 'networkSettings' => 'NetworkSettings'];
    }
}
