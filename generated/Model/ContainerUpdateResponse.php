<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ContainerUpdateResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Warnings encountered when updating the container.
     *
     * @var list<string>|null
     */
    public ?array $warnings;

    public function definedProperties(): array
    {
        return ['warnings' => 'Warnings'];
    }
}
