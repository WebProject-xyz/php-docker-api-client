<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class EngineDescription implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string|null
     */
    public ?string $engineVersion;
    /**
     * @var iterable<string, string>|null
     */
    public ?iterable $labels;
    /**
     * @var list<EngineDescriptionPluginsItem>|null
     */
    public ?array $plugins;

    public function definedProperties(): array
    {
        return ['engineVersion' => 'EngineVersion', 'labels' => 'Labels', 'plugins' => 'Plugins'];
    }
}
