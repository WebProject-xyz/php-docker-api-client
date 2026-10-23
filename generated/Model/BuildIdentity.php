<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use DateTimeInterface;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class BuildIdentity implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Ref is the identifier for the build request. This reference can be used to
     * look up the build details in BuildKit history API.
     *
     * @var string|null
     */
    public ?string $ref;
    /**
     * CreatedAt is the time when the build ran.
     *
     * @var DateTimeInterface|null
     */
    public ?DateTimeInterface $createdAt;

    public function definedProperties(): array
    {
        return ['ref' => 'Ref', 'createdAt' => 'CreatedAt'];
    }
}
