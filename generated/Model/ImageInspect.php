<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use ArrayObject;
use function array_key_exists;

class ImageInspect extends ArrayObject
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
     * ID is the content-addressable ID of an image.
     *
     * This identifier is a content-addressable digest calculated from the
     * image's configuration (which includes the digests of layers used by
     * the image).
     *
     * Note that this digest differs from the `RepoDigests` below, which
     * holds digests of image manifests that reference the image.
     *
     * @var string
     */
    protected $id;
    /**
     * A descriptor struct containing digest, media type, and size, as defined in
     * the [OCI Content Descriptors Specification](https://github.com/opencontainers/image-spec/blob/v1.0.1/descriptor.md).
     *
     * @var OCIDescriptor
     */
    protected $descriptor;
    /**
     * Manifests is a list of image manifests available in this image. It
     * provides a more detailed view of the platform-specific image manifests or
     * other image-attached data like build attestations.
     *
     * Only available if the daemon provides a multi-platform image store
     * and the `manifests` option is set in the inspect request.
     *
     * WARNING: This is experimental and may change at any time without any backward
     * compatibility.
     *
     * @var list<ImageManifestSummary>|null
     */
    protected $manifests;
    /**
     * List of image names/tags in the local image cache that reference this
     * image.
     *
     * Multiple image tags can refer to the same image, and this list may be
     * empty if no tags reference the image, in which case the image is
     * "untagged", in which case it can still be referenced by its ID.
     *
     * @var list<string>
     */
    protected $repoTags;
    /**
     * List of content-addressable digests of locally available image manifests
     * that the image is referenced from. Multiple manifests can refer to the
     * same image.
     *
     * These digests are usually only available if the image was either pulled
     * from a registry, or if the image was pushed to a registry, which is when
     * the manifest is generated and its digest calculated.
     *
     * @var list<string>
     */
    protected $repoDigests;
    /**
     * ID of the parent image.
     *
     * Depending on how the image was created, this field may be empty and
     * is only set for images that were built/created locally. This field
     * is empty if the image was pulled from an image registry.
     *
     * @var string
     */
    protected $parent;
    /**
     * Optional message that was set when committing or importing the image.
     *
     * @var string
     */
    protected $comment;
    /**
     * Date and time at which the image was created, formatted in
     * [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
     *
     * This information is only available if present in the image,
     * and omitted otherwise.
     *
     * @var string|null
     */
    protected $created;
    /**
     * The version of Docker that was used to build the image.
     *
     * Depending on how the image was created, this field may be empty.
     *
     * @var string
     */
    protected $dockerVersion;
    /**
     * Name of the author that was specified when committing the image, or as
     * specified through MAINTAINER (deprecated) in the Dockerfile.
     *
     * @var string
     */
    protected $author;
    /**
     * Configuration of the image. These fields are used as defaults
     * when starting a container from the image.
     *
     * @var ImageConfig
     */
    protected $config;
    /**
     * Hardware CPU architecture that the image runs on.
     *
     * @var string
     */
    protected $architecture;
    /**
     * CPU architecture variant (presently ARM-only).
     *
     * @var string|null
     */
    protected $variant;
    /**
     * Operating System the image is built to run on.
     *
     * @var string
     */
    protected $os;
    /**
     * Operating System version the image is built to run on (especially
     * for Windows).
     *
     * @var string|null
     */
    protected $osVersion;
    /**
     * Total size of the image including all layers it is composed of.
     *
     * @var int
     */
    protected $size;
    /**
     * Total size of the image including all layers it is composed of.
     *
     * Deprecated: this field is omitted in API v1.44, but kept for backward compatibility. Use Size instead.
     *
     * @var int
     */
    protected $virtualSize;
    /**
     * Information about the storage driver used to store the container's and
     * image's filesystem.
     *
     * @var DriverData
     */
    protected $graphDriver;
    /**
     * Information about the image's RootFS, including the layer IDs.
     *
     * @var ImageInspectRootFS
     */
    protected $rootFS;
    /**
     * Additional metadata of the image in the local cache. This information
     * is local to the daemon, and not part of the image itself.
     *
     * @var ImageInspectMetadata
     */
    protected $metadata;

    /**
     * ID is the content-addressable ID of an image.
     *
     * This identifier is a content-addressable digest calculated from the
     * image's configuration (which includes the digests of layers used by
     * the image).
     *
     * Note that this digest differs from the `RepoDigests` below, which
     * holds digests of image manifests that reference the image.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * ID is the content-addressable ID of an image.
     *
     * This identifier is a content-addressable digest calculated from the
     * image's configuration (which includes the digests of layers used by
     * the image).
     *
     * Note that this digest differs from the `RepoDigests` below, which
     * holds digests of image manifests that reference the image.
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
     * A descriptor struct containing digest, media type, and size, as defined in
     * the [OCI Content Descriptors Specification](https://github.com/opencontainers/image-spec/blob/v1.0.1/descriptor.md).
     *
     * @return OCIDescriptor
     */
    public function getDescriptor(): OCIDescriptor
    {
        return $this->descriptor;
    }

    /**
     * A descriptor struct containing digest, media type, and size, as defined in
     * the [OCI Content Descriptors Specification](https://github.com/opencontainers/image-spec/blob/v1.0.1/descriptor.md).
     *
     * @param OCIDescriptor $descriptor
     *
     * @return self
     */
    public function setDescriptor(OCIDescriptor $descriptor): self
    {
        $this->initialized['descriptor'] = true;
        $this->descriptor                = $descriptor;

        return $this;
    }

    /**
     * Manifests is a list of image manifests available in this image. It
     * provides a more detailed view of the platform-specific image manifests or
     * other image-attached data like build attestations.
     *
     * Only available if the daemon provides a multi-platform image store
     * and the `manifests` option is set in the inspect request.
     *
     * WARNING: This is experimental and may change at any time without any backward
     * compatibility.
     *
     * @return list<ImageManifestSummary>|null
     */
    public function getManifests(): ?array
    {
        return $this->manifests;
    }

    /**
     * Manifests is a list of image manifests available in this image. It
     * provides a more detailed view of the platform-specific image manifests or
     * other image-attached data like build attestations.
     *
     * Only available if the daemon provides a multi-platform image store
     * and the `manifests` option is set in the inspect request.
     *
     * WARNING: This is experimental and may change at any time without any backward
     * compatibility.
     *
     * @param list<ImageManifestSummary>|null $manifests
     *
     * @return self
     */
    public function setManifests(?array $manifests): self
    {
        $this->initialized['manifests'] = true;
        $this->manifests                = $manifests;

        return $this;
    }

    /**
     * List of image names/tags in the local image cache that reference this
     * image.
     *
     * Multiple image tags can refer to the same image, and this list may be
     * empty if no tags reference the image, in which case the image is
     * "untagged", in which case it can still be referenced by its ID.
     *
     * @return list<string>
     */
    public function getRepoTags(): array
    {
        return $this->repoTags;
    }

    /**
     * List of image names/tags in the local image cache that reference this
     * image.
     *
     * Multiple image tags can refer to the same image, and this list may be
     * empty if no tags reference the image, in which case the image is
     * "untagged", in which case it can still be referenced by its ID.
     *
     * @param list<string> $repoTags
     *
     * @return self
     */
    public function setRepoTags(array $repoTags): self
    {
        $this->initialized['repoTags'] = true;
        $this->repoTags                = $repoTags;

        return $this;
    }

    /**
     * List of content-addressable digests of locally available image manifests
     * that the image is referenced from. Multiple manifests can refer to the
     * same image.
     *
     * These digests are usually only available if the image was either pulled
     * from a registry, or if the image was pushed to a registry, which is when
     * the manifest is generated and its digest calculated.
     *
     * @return list<string>
     */
    public function getRepoDigests(): array
    {
        return $this->repoDigests;
    }

    /**
     * List of content-addressable digests of locally available image manifests
     * that the image is referenced from. Multiple manifests can refer to the
     * same image.
     *
     * These digests are usually only available if the image was either pulled
     * from a registry, or if the image was pushed to a registry, which is when
     * the manifest is generated and its digest calculated.
     *
     * @param list<string> $repoDigests
     *
     * @return self
     */
    public function setRepoDigests(array $repoDigests): self
    {
        $this->initialized['repoDigests'] = true;
        $this->repoDigests                = $repoDigests;

        return $this;
    }

    /**
     * ID of the parent image.
     *
     * Depending on how the image was created, this field may be empty and
     * is only set for images that were built/created locally. This field
     * is empty if the image was pulled from an image registry.
     *
     * @return string
     */
    public function getParent(): string
    {
        return $this->parent;
    }

    /**
     * ID of the parent image.
     *
     * Depending on how the image was created, this field may be empty and
     * is only set for images that were built/created locally. This field
     * is empty if the image was pulled from an image registry.
     *
     * @param string $parent
     *
     * @return self
     */
    public function setParent(string $parent): self
    {
        $this->initialized['parent'] = true;
        $this->parent                = $parent;

        return $this;
    }

    /**
     * Optional message that was set when committing or importing the image.
     *
     * @return string
     */
    public function getComment(): string
    {
        return $this->comment;
    }

    /**
     * Optional message that was set when committing or importing the image.
     *
     * @param string $comment
     *
     * @return self
     */
    public function setComment(string $comment): self
    {
        $this->initialized['comment'] = true;
        $this->comment                = $comment;

        return $this;
    }

    /**
     * Date and time at which the image was created, formatted in
     * [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
     *
     * This information is only available if present in the image,
     * and omitted otherwise.
     *
     * @return string|null
     */
    public function getCreated(): ?string
    {
        return $this->created;
    }

    /**
     * Date and time at which the image was created, formatted in
     * [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
     *
     * This information is only available if present in the image,
     * and omitted otherwise.
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
     * The version of Docker that was used to build the image.
     *
     * Depending on how the image was created, this field may be empty.
     *
     * @return string
     */
    public function getDockerVersion(): string
    {
        return $this->dockerVersion;
    }

    /**
     * The version of Docker that was used to build the image.
     *
     * Depending on how the image was created, this field may be empty.
     *
     * @param string $dockerVersion
     *
     * @return self
     */
    public function setDockerVersion(string $dockerVersion): self
    {
        $this->initialized['dockerVersion'] = true;
        $this->dockerVersion                = $dockerVersion;

        return $this;
    }

    /**
     * Name of the author that was specified when committing the image, or as
     * specified through MAINTAINER (deprecated) in the Dockerfile.
     *
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * Name of the author that was specified when committing the image, or as
     * specified through MAINTAINER (deprecated) in the Dockerfile.
     *
     * @param string $author
     *
     * @return self
     */
    public function setAuthor(string $author): self
    {
        $this->initialized['author'] = true;
        $this->author                = $author;

        return $this;
    }

    /**
     * Configuration of the image. These fields are used as defaults
     * when starting a container from the image.
     *
     * @return ImageConfig
     */
    public function getConfig(): ImageConfig
    {
        return $this->config;
    }

    /**
     * Configuration of the image. These fields are used as defaults
     * when starting a container from the image.
     *
     * @param ImageConfig $config
     *
     * @return self
     */
    public function setConfig(ImageConfig $config): self
    {
        $this->initialized['config'] = true;
        $this->config                = $config;

        return $this;
    }

    /**
     * Hardware CPU architecture that the image runs on.
     *
     * @return string
     */
    public function getArchitecture(): string
    {
        return $this->architecture;
    }

    /**
     * Hardware CPU architecture that the image runs on.
     *
     * @param string $architecture
     *
     * @return self
     */
    public function setArchitecture(string $architecture): self
    {
        $this->initialized['architecture'] = true;
        $this->architecture                = $architecture;

        return $this;
    }

    /**
     * CPU architecture variant (presently ARM-only).
     *
     * @return string|null
     */
    public function getVariant(): ?string
    {
        return $this->variant;
    }

    /**
     * CPU architecture variant (presently ARM-only).
     *
     * @param string|null $variant
     *
     * @return self
     */
    public function setVariant(?string $variant): self
    {
        $this->initialized['variant'] = true;
        $this->variant                = $variant;

        return $this;
    }

    /**
     * Operating System the image is built to run on.
     *
     * @return string
     */
    public function getOs(): string
    {
        return $this->os;
    }

    /**
     * Operating System the image is built to run on.
     *
     * @param string $os
     *
     * @return self
     */
    public function setOs(string $os): self
    {
        $this->initialized['os'] = true;
        $this->os                = $os;

        return $this;
    }

    /**
     * Operating System version the image is built to run on (especially
     * for Windows).
     *
     * @return string|null
     */
    public function getOsVersion(): ?string
    {
        return $this->osVersion;
    }

    /**
     * Operating System version the image is built to run on (especially
     * for Windows).
     *
     * @param string|null $osVersion
     *
     * @return self
     */
    public function setOsVersion(?string $osVersion): self
    {
        $this->initialized['osVersion'] = true;
        $this->osVersion                = $osVersion;

        return $this;
    }

    /**
     * Total size of the image including all layers it is composed of.
     *
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * Total size of the image including all layers it is composed of.
     *
     * @param int $size
     *
     * @return self
     */
    public function setSize(int $size): self
    {
        $this->initialized['size'] = true;
        $this->size                = $size;

        return $this;
    }

    /**
     * Total size of the image including all layers it is composed of.
     *
     * Deprecated: this field is omitted in API v1.44, but kept for backward compatibility. Use Size instead.
     *
     * @return int
     */
    public function getVirtualSize(): int
    {
        return $this->virtualSize;
    }

    /**
     * Total size of the image including all layers it is composed of.
     *
     * Deprecated: this field is omitted in API v1.44, but kept for backward compatibility. Use Size instead.
     *
     * @param int $virtualSize
     *
     * @return self
     */
    public function setVirtualSize(int $virtualSize): self
    {
        $this->initialized['virtualSize'] = true;
        $this->virtualSize                = $virtualSize;

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
     * Information about the image's RootFS, including the layer IDs.
     *
     * @return ImageInspectRootFS
     */
    public function getRootFS(): ImageInspectRootFS
    {
        return $this->rootFS;
    }

    /**
     * Information about the image's RootFS, including the layer IDs.
     *
     * @param ImageInspectRootFS $rootFS
     *
     * @return self
     */
    public function setRootFS(ImageInspectRootFS $rootFS): self
    {
        $this->initialized['rootFS'] = true;
        $this->rootFS                = $rootFS;

        return $this;
    }

    /**
     * Additional metadata of the image in the local cache. This information
     * is local to the daemon, and not part of the image itself.
     *
     * @return ImageInspectMetadata
     */
    public function getMetadata(): ImageInspectMetadata
    {
        return $this->metadata;
    }

    /**
     * Additional metadata of the image in the local cache. This information
     * is local to the daemon, and not part of the image itself.
     *
     * @param ImageInspectMetadata $metadata
     *
     * @return self
     */
    public function setMetadata(ImageInspectMetadata $metadata): self
    {
        $this->initialized['metadata'] = true;
        $this->metadata                = $metadata;

        return $this;
    }
}
