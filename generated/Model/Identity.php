<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class Identity implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Signature contains the properties of verified signatures for the image.
     *
     * @var list<SignatureIdentity>|null
     */
    public ?array $signature;
    /**
     * Pull contains remote location information if image was created via pull.
     * If image was pulled via mirror, this contains the original repository location.
     * After successful push this images also contains the pushed repository location.
     *
     * @var list<PullIdentity>|null
     */
    public ?array $pull;
    /**
     * Build contains build reference information if image was created via build.
     *
     * @var list<BuildIdentity>|null
     */
    public ?array $build;

    public function definedProperties(): array
    {
        return ['signature' => 'Signature', 'pull' => 'Pull', 'build' => 'Build'];
    }
}
