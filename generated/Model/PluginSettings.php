<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class PluginSettings implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<PluginMount>
     */
    public array $mounts;
    /**
     * @var list<string>
     */
    public array $env;
    /**
     * @var list<string>
     */
    public array $args;
    /**
     * @var list<PluginDevice>
     */
    public array $devices;

    public function definedProperties(): array
    {
        return ['mounts' => 'Mounts', 'env' => 'Env', 'args' => 'Args', 'devices' => 'Devices'];
    }
}
