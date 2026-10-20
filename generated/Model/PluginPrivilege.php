<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class PluginPrivilege implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string|null
     */
    public ?string $name;
    /**
     * @var string|null
     */
    public ?string $description;
    /**
     * @var list<string>|null
     */
    public ?array $value;

    public function definedProperties(): array
    {
        return ['name' => 'Name', 'description' => 'Description', 'value' => 'Value'];
    }
}
