<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class OCIDescriptor implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The media type of the object this schema refers to.
     *
     * @var string|null
     */
    public ?string $mediaType;
    /**
     * The digest of the targeted content.
     *
     * @var string|null
     */
    public ?string $digest;
    /**
     * The size in bytes of the blob.
     *
     * @var int|null
     */
    public ?int $size;
    /**
     * List of URLs from which this object MAY be downloaded.
     *
     * @var list<string>|null
     */
    public ?array $urls;
    /**
     * Arbitrary metadata relating to the targeted content.
     *
     * @var iterable<string, string>|null
     */
    public ?iterable $annotations;
    /**
     * Data is an embedding of the targeted content. This is encoded as a base64
     * string when marshalled to JSON (automatically, by encoding/json). If
     * present, Data can be used directly to avoid fetching the targeted content.
     *
     * @var string|null
     */
    public ?string $data;
    /**
     * Describes the platform which the image in the manifest runs on, as defined
     * in the [OCI Image Index Specification](https://github.com/opencontainers/image-spec/blob/v1.0.1/image-index.md).
     *
     * @var OCIPlatform|null
     */
    public ?OCIPlatform $platform;
    /**
     * ArtifactType is the IANA media type of this artifact.
     *
     * @var string|null
     */
    public ?string $artifactType;

    public function definedProperties(): array
    {
        return ['mediaType' => 'mediaType', 'digest' => 'digest', 'size' => 'size', 'urls' => 'urls', 'annotations' => 'annotations', 'data' => 'data', 'platform' => 'platform', 'artifactType' => 'artifactType'];
    }
}
