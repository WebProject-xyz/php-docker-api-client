<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class TaskSpecContainerSpecPrivilegesSeccomp implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string|null
     */
    public ?string $mode;
    /**
     * The custom seccomp profile as a json object.
     *
     * @var string|null
     */
    public ?string $profile;

    public function definedProperties(): array
    {
        return ['mode' => 'Mode', 'profile' => 'Profile'];
    }
}
