<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class TaskSpecPluginSpec implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The name or 'alias' to use for the plugin.
     *
     * @var string|null
     */
    public ?string $name;
    /**
     * The plugin image reference to use.
     *
     * @var string|null
     */
    public ?string $remote;
    /**
     * Disable the plugin once scheduled.
     *
     * @var bool|null
     */
    public ?bool $disabled;
    /**
     * @var list<PluginPrivilege>|null
     */
    public ?array $pluginPrivilege;

    public function definedProperties(): array
    {
        return ['name' => 'Name', 'remote' => 'Remote', 'disabled' => 'Disabled', 'pluginPrivilege' => 'PluginPrivilege'];
    }
}
