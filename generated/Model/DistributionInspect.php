<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class DistributionInspect implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A descriptor struct containing digest, media type, and size, as defined in
     * the [OCI Content Descriptors Specification](https://github.com/opencontainers/image-spec/blob/v1.0.1/descriptor.md).
     *
     * @var OCIDescriptor
     */
    public OCIDescriptor $descriptor;
    /**
     * An array containing all platforms supported by the image.
     *
     * @var list<OCIPlatform>
     */
    public array $platforms;

    public function definedProperties(): array
    {
        return ['descriptor' => 'Descriptor', 'platforms' => 'Platforms'];
    }
}
