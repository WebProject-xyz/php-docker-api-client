<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ContainerCreateResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The ID of the created container.
     *
     * @var string
     */
    public string $id;
    /**
     * Warnings encountered when creating the container.
     *
     * @var list<string>
     */
    public array $warnings;

    public function definedProperties(): array
    {
        return ['id' => 'Id', 'warnings' => 'Warnings'];
    }
}
