<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use ArrayObject;
use function array_key_exists;

class ImageSummary extends ArrayObject
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
     * ID of the parent image.
     *
     * Depending on how the image was created, this field may be empty and
     * is only set for images that were built/created locally. This field
     * is empty if the image was pulled from an image registry.
     *
     * @var string
     */
    protected $parentId;
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
     * Date and time at which the image was created as a Unix timestamp
     * (number of seconds since EPOCH).
     *
     * @var int
     */
    protected $created;
    /**
     * Total size of the image including all layers it is composed of.
     *
     * @var int
     */
    protected $size;
    /**
     * Total size of image layers that are shared between this image and other
     * images.
     *
     * This size is not calculated by default. `-1` indicates that the value
     * has not been set / calculated.
     *
     * @var int
     */
    protected $sharedSize;
    /**
     * Total size of the image including all layers it is composed of.
     *
     * Deprecated: this field is omitted in API v1.44, but kept for backward compatibility. Use Size instead.
     *
     * @var int
     */
    protected $virtualSize;
    /**
     * User-defined key/value metadata.
     *
     * @var array<string, string>
     */
    protected $labels;
    /**
     * Number of containers using this image. Includes both stopped and running
     * containers.
     *
     * This size is not calculated by default, and depends on which API endpoint
     * is used. `-1` indicates that the value has not been set / calculated.
     *
     * @var int
     */
    protected $containers;
    /**
     * Manifests is a list of manifests available in this image.
     * It provides a more detailed view of the platform-specific image manifests
     * or other image-attached data like build attestations.
     *
     * WARNING: This is experimental and may change at any time without any backward
     * compatibility.
     *
     * @var list<ImageManifestSummary>
     */
    protected $manifests;
    /**
     * A descriptor struct containing digest, media type, and size, as defined in
     * the [OCI Content Descriptors Specification](https://github.com/opencontainers/image-spec/blob/v1.0.1/descriptor.md).
     *
     * @var OCIDescriptor
     */
    protected $descriptor;

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
     * ID of the parent image.
     *
     * Depending on how the image was created, this field may be empty and
     * is only set for images that were built/created locally. This field
     * is empty if the image was pulled from an image registry.
     *
     * @return string
     */
    public function getParentId(): string
    {
        return $this->parentId;
    }

    /**
     * ID of the parent image.
     *
     * Depending on how the image was created, this field may be empty and
     * is only set for images that were built/created locally. This field
     * is empty if the image was pulled from an image registry.
     *
     * @param string $parentId
     *
     * @return self
     */
    public function setParentId(string $parentId): self
    {
        $this->initialized['parentId'] = true;
        $this->parentId                = $parentId;

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
     * Date and time at which the image was created as a Unix timestamp
     * (number of seconds since EPOCH).
     *
     * @return int
     */
    public function getCreated(): int
    {
        return $this->created;
    }

    /**
     * Date and time at which the image was created as a Unix timestamp
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
     * Total size of image layers that are shared between this image and other
     * images.
     *
     * This size is not calculated by default. `-1` indicates that the value
     * has not been set / calculated.
     *
     * @return int
     */
    public function getSharedSize(): int
    {
        return $this->sharedSize;
    }

    /**
     * Total size of image layers that are shared between this image and other
     * images.
     *
     * This size is not calculated by default. `-1` indicates that the value
     * has not been set / calculated.
     *
     * @param int $sharedSize
     *
     * @return self
     */
    public function setSharedSize(int $sharedSize): self
    {
        $this->initialized['sharedSize'] = true;
        $this->sharedSize                = $sharedSize;

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
     * Number of containers using this image. Includes both stopped and running
     * containers.
     *
     * This size is not calculated by default, and depends on which API endpoint
     * is used. `-1` indicates that the value has not been set / calculated.
     *
     * @return int
     */
    public function getContainers(): int
    {
        return $this->containers;
    }

    /**
     * Number of containers using this image. Includes both stopped and running
     * containers.
     *
     * This size is not calculated by default, and depends on which API endpoint
     * is used. `-1` indicates that the value has not been set / calculated.
     *
     * @param int $containers
     *
     * @return self
     */
    public function setContainers(int $containers): self
    {
        $this->initialized['containers'] = true;
        $this->containers                = $containers;

        return $this;
    }

    /**
     * Manifests is a list of manifests available in this image.
     * It provides a more detailed view of the platform-specific image manifests
     * or other image-attached data like build attestations.
     *
     * WARNING: This is experimental and may change at any time without any backward
     * compatibility.
     *
     * @return list<ImageManifestSummary>
     */
    public function getManifests(): array
    {
        return $this->manifests;
    }

    /**
     * Manifests is a list of manifests available in this image.
     * It provides a more detailed view of the platform-specific image manifests
     * or other image-attached data like build attestations.
     *
     * WARNING: This is experimental and may change at any time without any backward
     * compatibility.
     *
     * @param list<ImageManifestSummary> $manifests
     *
     * @return self
     */
    public function setManifests(array $manifests): self
    {
        $this->initialized['manifests'] = true;
        $this->manifests                = $manifests;

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
}
