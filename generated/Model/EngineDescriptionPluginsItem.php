<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class EngineDescriptionPluginsItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string|null
     */
    public ?string $type;
    /**
     * @var string|null
     */
    public ?string $name;

    public function definedProperties(): array
    {
        return ['type' => 'Type', 'name' => 'Name'];
    }
}
