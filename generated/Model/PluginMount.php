<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class PluginMount implements AdditionalPropertiesInterface
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
     * @var string
     */
    public string $source;
    /**
     * @var string
     */
    public string $destination;
    /**
     * @var string
     */
    public string $type;
    /**
     * @var list<string>
     */
    public array $options;

    public function definedProperties(): array
    {
        return ['name' => 'Name', 'description' => 'Description', 'settable' => 'Settable', 'source' => 'Source', 'destination' => 'Destination', 'type' => 'Type', 'options' => 'Options'];
    }
}
