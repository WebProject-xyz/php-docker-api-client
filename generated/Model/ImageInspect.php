<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use DateTimeInterface;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ImageInspect implements AdditionalPropertiesInterface
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
     * A descriptor struct containing digest, media type, and size, as defined in
     * the [OCI Content Descriptors Specification](https://github.com/opencontainers/image-spec/blob/v1.0.1/descriptor.md).
     *
     * @var OCIDescriptor
     */
    public OCIDescriptor $descriptor;
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
    public ?array $manifests;
    /**
     * Identity holds information about the identity and origin of the image.
     * This is trusted information verified by the daemon and cannot be modified
     * by tagging an image to a different name.
     *
     * @var Identity
     */
    public Identity $identity;
    /**
     * List of image names/tags in the local image cache that reference this
     * image.
     *
     * Multiple image tags can refer to the same image, and this list may be
     * empty if no tags reference the image, in which case the image is
     * "untagged", in which case it can still be referenced by its ID.
     *
     * @var list<string>|null
     */
    public ?array $repoTags;
    /**
     * List of content-addressable digests of locally available image manifests
     * that the image is referenced from. Multiple manifests can refer to the
     * same image.
     *
     * These digests are usually only available if the image was either pulled
     * from a registry, or if the image was pushed to a registry, which is when
     * the manifest is generated and its digest calculated.
     *
     * @var list<string>|null
     */
    public ?array $repoDigests;
    /**
     * Optional message that was set when committing or importing the image.
     *
     * @var string|null
     */
    public ?string $comment;
    /**
     * Date and time at which the image was created, formatted in
     * [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
     *
     * This information is only available if present in the image,
     * and omitted otherwise.
     *
     * @var DateTimeInterface|null
     */
    public ?DateTimeInterface $created;
    /**
     * Name of the author that was specified when committing the image, or as
     * specified through MAINTAINER (deprecated) in the Dockerfile.
     *
     * @var string|null
     */
    public ?string $author;
    /**
     * Configuration of the image. These fields are used as defaults
     * when starting a container from the image.
     *
     * @var ImageConfig
     */
    public ImageConfig $config;
    /**
     * Hardware CPU architecture that the image runs on.
     *
     * @var string
     */
    public string $architecture;
    /**
     * CPU architecture variant (presently ARM-only).
     *
     * @var string|null
     */
    public ?string $variant;
    /**
     * Operating System the image is built to run on.
     *
     * @var string
     */
    public string $os;
    /**
     * Operating System version the image is built to run on (especially
     * for Windows).
     *
     * @var string|null
     */
    public ?string $osVersion;
    /**
     * Total size of the image including all layers it is composed of.
     *
     * @var int
     */
    public int $size;
    /**
     * Information about the storage driver used to store the container's and
     * image's filesystem.
     *
     * @var DriverData
     */
    public DriverData $graphDriver;
    /**
     * Information about the image's RootFS, including the layer IDs.
     *
     * @var ImageInspectRootFS|null
     */
    public ?ImageInspectRootFS $rootFS;
    /**
     * Additional metadata of the image in the local cache. This information
     * is local to the daemon, and not part of the image itself.
     *
     * @var ImageInspectMetadata|null
     */
    public ?ImageInspectMetadata $metadata;

    public function definedProperties(): array
    {
        return ['id' => 'Id', 'descriptor' => 'Descriptor', 'manifests' => 'Manifests', 'identity' => 'Identity', 'repoTags' => 'RepoTags', 'repoDigests' => 'RepoDigests', 'comment' => 'Comment', 'created' => 'Created', 'author' => 'Author', 'config' => 'Config', 'architecture' => 'Architecture', 'variant' => 'Variant', 'os' => 'Os', 'osVersion' => 'OsVersion', 'size' => 'Size', 'graphDriver' => 'GraphDriver', 'rootFS' => 'RootFS', 'metadata' => 'Metadata'];
    }
}
