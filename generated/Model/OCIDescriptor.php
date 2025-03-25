<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use ArrayObject;
use function array_key_exists;

class OCIDescriptor extends ArrayObject
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
     * The media type of the object this schema refers to.
     *
     * @var string
     */
    protected $mediaType;
    /**
     * The digest of the targeted content.
     *
     * @var string
     */
    protected $digest;
    /**
     * The size in bytes of the blob.
     *
     * @var int
     */
    protected $size;
    /**
     * List of URLs from which this object MAY be downloaded.
     *
     * @var list<string>|null
     */
    protected $urls;
    /**
     * Arbitrary metadata relating to the targeted content.
     *
     * @var array<string, string>|null
     */
    protected $annotations;
    /**
     * Data is an embedding of the targeted content. This is encoded as a base64
     * string when marshalled to JSON (automatically, by encoding/json). If
     * present, Data can be used directly to avoid fetching the targeted content.
     *
     * @var string|null
     */
    protected $data;
    /**
     * Describes the platform which the image in the manifest runs on, as defined
     * in the [OCI Image Index Specification](https://github.com/opencontainers/image-spec/blob/v1.0.1/image-index.md).
     *
     * @var OCIPlatform|null
     */
    protected $platform;
    /**
     * ArtifactType is the IANA media type of this artifact.
     *
     * @var string|null
     */
    protected $artifactType;

    /**
     * The media type of the object this schema refers to.
     *
     * @return string
     */
    public function getMediaType(): string
    {
        return $this->mediaType;
    }

    /**
     * The media type of the object this schema refers to.
     *
     * @param string $mediaType
     *
     * @return self
     */
    public function setMediaType(string $mediaType): self
    {
        $this->initialized['mediaType'] = true;
        $this->mediaType                = $mediaType;

        return $this;
    }

    /**
     * The digest of the targeted content.
     *
     * @return string
     */
    public function getDigest(): string
    {
        return $this->digest;
    }

    /**
     * The digest of the targeted content.
     *
     * @param string $digest
     *
     * @return self
     */
    public function setDigest(string $digest): self
    {
        $this->initialized['digest'] = true;
        $this->digest                = $digest;

        return $this;
    }

    /**
     * The size in bytes of the blob.
     *
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * The size in bytes of the blob.
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
     * List of URLs from which this object MAY be downloaded.
     *
     * @return list<string>|null
     */
    public function getUrls(): ?array
    {
        return $this->urls;
    }

    /**
     * List of URLs from which this object MAY be downloaded.
     *
     * @param list<string>|null $urls
     *
     * @return self
     */
    public function setUrls(?array $urls): self
    {
        $this->initialized['urls'] = true;
        $this->urls                = $urls;

        return $this;
    }

    /**
     * Arbitrary metadata relating to the targeted content.
     *
     * @return array<string, string>|null
     */
    public function getAnnotations(): ?iterable
    {
        return $this->annotations;
    }

    /**
     * Arbitrary metadata relating to the targeted content.
     *
     * @param array<string, string>|null $annotations
     *
     * @return self
     */
    public function setAnnotations(?iterable $annotations): self
    {
        $this->initialized['annotations'] = true;
        $this->annotations                = $annotations;

        return $this;
    }

    /**
     * Data is an embedding of the targeted content. This is encoded as a base64
     * string when marshalled to JSON (automatically, by encoding/json). If
     * present, Data can be used directly to avoid fetching the targeted content.
     *
     * @return string|null
     */
    public function getData(): ?string
    {
        return $this->data;
    }

    /**
     * Data is an embedding of the targeted content. This is encoded as a base64
     * string when marshalled to JSON (automatically, by encoding/json). If
     * present, Data can be used directly to avoid fetching the targeted content.
     *
     * @param string|null $data
     *
     * @return self
     */
    public function setData(?string $data): self
    {
        $this->initialized['data'] = true;
        $this->data                = $data;

        return $this;
    }

    /**
     * Describes the platform which the image in the manifest runs on, as defined
     * in the [OCI Image Index Specification](https://github.com/opencontainers/image-spec/blob/v1.0.1/image-index.md).
     *
     * @return OCIPlatform|null
     */
    public function getPlatform(): ?OCIPlatform
    {
        return $this->platform;
    }

    /**
     * Describes the platform which the image in the manifest runs on, as defined
     * in the [OCI Image Index Specification](https://github.com/opencontainers/image-spec/blob/v1.0.1/image-index.md).
     *
     * @param OCIPlatform|null $platform
     *
     * @return self
     */
    public function setPlatform(?OCIPlatform $platform): self
    {
        $this->initialized['platform'] = true;
        $this->platform                = $platform;

        return $this;
    }

    /**
     * ArtifactType is the IANA media type of this artifact.
     *
     * @return string|null
     */
    public function getArtifactType(): ?string
    {
        return $this->artifactType;
    }

    /**
     * ArtifactType is the IANA media type of this artifact.
     *
     * @param string|null $artifactType
     *
     * @return self
     */
    public function setArtifactType(?string $artifactType): self
    {
        $this->initialized['artifactType'] = true;
        $this->artifactType                = $artifactType;

        return $this;
    }
}
