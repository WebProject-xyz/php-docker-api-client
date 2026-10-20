<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class Plugin implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string|null
     */
    public ?string $id;
    /**
     * @var string
     */
    public string $name;
    /**
     * True if the plugin is running. False if the plugin is not running, only installed.
     *
     * @var bool
     */
    public bool $enabled;
    /**
     * user-configurable settings for the plugin.
     *
     * @var PluginSettings
     */
    public PluginSettings $settings;
    /**
     * plugin remote reference used to push/pull the plugin.
     *
     * @var string
     */
    public string $pluginReference;
    /**
     * The config of a plugin.
     *
     * @var PluginConfig
     */
    public PluginConfig $config;

    public function definedProperties(): array
    {
        return ['id' => 'Id', 'name' => 'Name', 'enabled' => 'Enabled', 'settings' => 'Settings', 'pluginReference' => 'PluginReference', 'config' => 'Config'];
    }
}
