<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ImageSummary implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
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
    public string $id;
    /**
     * ID of the parent image.
     *
     * Depending on how the image was created, this field may be empty and
     * is only set for images that were built/created locally. This field
     * is empty if the image was pulled from an image registry.
     *
     * @var string
     */
    public string $parentId;
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
    public array $repoTags;
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
    public array $repoDigests;
    /**
     * Date and time at which the image was created as a Unix timestamp
     * (number of seconds since EPOCH).
     *
     * @var int
     */
    public int $created;
    /**
     * Total size of the image including all layers it is composed of.
     *
     * @var int
     */
    public int $size;
    /**
     * Total size of image layers that are shared between this image and other
     * images.
     *
     * This size is not calculated by default. `-1` indicates that the value
     * has not been set / calculated.
     *
     * @var int
     */
    public int $sharedSize;
    /**
     * User-defined key/value metadata.
     *
     * @var iterable<string, string>
     */
    public iterable $labels;
    /**
     * Number of containers using this image. Includes both stopped and running
     * containers.
     *
     * `-1` indicates that the value has not been set / calculated.
     *
     * @var int
     */
    public int $containers;
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
    public array $manifests;
    /**
     * A descriptor struct containing digest, media type, and size, as defined in
     * the [OCI Content Descriptors Specification](https://github.com/opencontainers/image-spec/blob/v1.0.1/descriptor.md).
     *
     * @var OCIDescriptor
     */
    public OCIDescriptor $descriptor;

    public function definedProperties(): array
    {
        return ['id' => 'Id', 'parentId' => 'ParentId', 'repoTags' => 'RepoTags', 'repoDigests' => 'RepoDigests', 'created' => 'Created', 'size' => 'Size', 'sharedSize' => 'SharedSize', 'labels' => 'Labels', 'containers' => 'Containers', 'manifests' => 'Manifests', 'descriptor' => 'Descriptor'];
    }
}
