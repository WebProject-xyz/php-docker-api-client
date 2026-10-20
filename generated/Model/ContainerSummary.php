<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ContainerSummary implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The ID of this container as a 128-bit (64-character) hexadecimal string (32 bytes).
     *
     * @var string|null
     */
    public ?string $id;
    /**
     * The names associated with this container. Most containers have a single
     * name, but when using legacy "links", the container can have multiple
     * names.
     *
     * For historic reasons, names are prefixed with a forward-slash (`/`).
     *
     * @var list<string>|null
     */
    public ?array $names;
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
     * @var string|null
     */
    public ?string $image;
    /**
     * The ID (digest) of the image that this container was created from.
     *
     * @var string|null
     */
    public ?string $imageID;
    /**
     * A descriptor struct containing digest, media type, and size, as defined in
     * the [OCI Content Descriptors Specification](https://github.com/opencontainers/image-spec/blob/v1.0.1/descriptor.md).
     *
     * @var OCIDescriptor
     */
    public OCIDescriptor $imageManifestDescriptor;
    /**
     * Command to run when starting the container.
     *
     * @var string|null
     */
    public ?string $command;
    /**
     * Date and time at which the container was created as a Unix timestamp
     * (number of seconds since EPOCH).
     *
     * @var int|null
     */
    public ?int $created;
    /**
     * Port-mappings for the container.
     *
     * @var list<PortSummary>|null
     */
    public ?array $ports;
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
     * User-defined key/value metadata.
     *
     * @var iterable<string, string>|null
     */
    public ?iterable $labels;
    /**
     * The state of this container.
     *
     * @var string|null
     */
    public ?string $state;
    /**
     * Additional human-readable status of this container (e.g. `Exit 0`).
     *
     * @var string|null
     */
    public ?string $status;
    /**
     * Summary of host-specific runtime information of the container. This
     * is a reduced set of information in the container's "HostConfig" as
     * available in the container "inspect" response.
     *
     * @var ContainerSummaryHostConfig|null
     */
    public ?ContainerSummaryHostConfig $hostConfig;
    /**
     * Summary of the container's network settings.
     *
     * @var ContainerSummaryNetworkSettings|null
     */
    public ?ContainerSummaryNetworkSettings $networkSettings;
    /**
     * List of mounts used by the container.
     *
     * @var list<MountPoint>|null
     */
    public ?array $mounts;
    /**
     * Summary of health status.
     *
     * Added in v1.52, before that version all container summary not include Health.
     * After this attribute introduced, it includes containers with no health checks configured,
     * or containers that are not running with none
     *
     * @var ContainerSummaryHealth|null
     */
    public ?ContainerSummaryHealth $health;

    public function definedProperties(): array
    {
        return ['id' => 'Id', 'names' => 'Names', 'image' => 'Image', 'imageID' => 'ImageID', 'imageManifestDescriptor' => 'ImageManifestDescriptor', 'command' => 'Command', 'created' => 'Created', 'ports' => 'Ports', 'sizeRw' => 'SizeRw', 'sizeRootFs' => 'SizeRootFs', 'labels' => 'Labels', 'state' => 'State', 'status' => 'Status', 'hostConfig' => 'HostConfig', 'networkSettings' => 'NetworkSettings', 'mounts' => 'Mounts', 'health' => 'Health'];
    }
}
