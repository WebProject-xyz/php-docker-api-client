<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ImageManifestSummary implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * ID is the content-addressable ID of an image and is the same as the
     * digest of the image manifest.
     *
     * @var string
     */
    public string $iD;
    /**
     * A descriptor struct containing digest, media type, and size, as defined in
     * the [OCI Content Descriptors Specification](https://github.com/opencontainers/image-spec/blob/v1.0.1/descriptor.md).
     *
     * @var OCIDescriptor
     */
    public OCIDescriptor $descriptor;
    /**
     * Indicates whether all the child content (image config, layers) is fully available locally.
     *
     * @var bool
     */
    public bool $available;
    /**
     * @var ImageManifestSummarySize
     */
    public ImageManifestSummarySize $size;
    /**
     * The kind of the manifest.
     *
     * kind         | description
     * -------------|-----------------------------------------------------------
     * image        | Image manifest that can be used to start a container.
     * attestation  | Attestation manifest produced by the Buildkit builder for a specific image manifest.
     *
     * @var ImageManifestSummaryKind
     */
    public ImageManifestSummaryKind $kind;
    /**
     * The image data for the image manifest.
     * This field is only populated when Kind is "image".
     *
     * @var ImageManifestSummaryImageData|null
     */
    public ?ImageManifestSummaryImageData $imageData;
    /**
     * The image data for the attestation manifest.
     * This field is only populated when Kind is "attestation".
     *
     * @var ImageManifestSummaryAttestationData|null
     */
    public ?ImageManifestSummaryAttestationData $attestationData;

    public function definedProperties(): array
    {
        return ['iD' => 'ID', 'descriptor' => 'Descriptor', 'available' => 'Available', 'size' => 'Size', 'kind' => 'Kind', 'imageData' => 'ImageData', 'attestationData' => 'AttestationData'];
    }
}
