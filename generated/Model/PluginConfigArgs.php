<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class PluginConfigArgs implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $description;
    /**
     * @var list<string>
     */
    public array $settable;
    /**
     * @var list<string>
     */
    public array $value;

    public function definedProperties(): array
    {
        return ['name' => 'Name', 'description' => 'Description', 'settable' => 'Settable', 'value' => 'Value'];
    }
}
