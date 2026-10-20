<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class TaskSpecLogDriver implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string|null
     */
    public ?string $name;
    /**
     * @var iterable<string, string>|null
     */
    public ?iterable $options;

    public function definedProperties(): array
    {
        return ['name' => 'Name', 'options' => 'Options'];
    }
}
