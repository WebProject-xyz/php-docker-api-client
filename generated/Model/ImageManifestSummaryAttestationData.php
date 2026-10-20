<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ImageManifestSummaryAttestationData implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The digest of the image manifest that this attestation is for.
     *
     * @var string
     */
    public string $for;

    public function definedProperties(): array
    {
        return ['for' => 'For'];
    }
}
