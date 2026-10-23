<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ImageManifestSummaryImageData implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Describes the platform which the image in the manifest runs on, as defined
     * in the [OCI Image Index Specification](https://github.com/opencontainers/image-spec/blob/v1.0.1/image-index.md).
     *
     * @var OCIPlatform|null
     */
    public ?OCIPlatform $platform;
    /**
     * Identity holds information about the identity and origin of the image.
     * This is trusted information verified by the daemon and cannot be modified
     * by tagging an image to a different name.
     *
     * @var Identity
     */
    public Identity $identity;
    /**
     * The IDs of the containers that are using this image.
     *
     * @var list<string>
     */
    public array $containers;
    /**
     * @var ImageManifestSummaryImageDataSize
     */
    public ImageManifestSummaryImageDataSize $size;

    public function definedProperties(): array
    {
        return ['platform' => 'Platform', 'identity' => 'Identity', 'containers' => 'Containers', 'size' => 'Size'];
    }
}
