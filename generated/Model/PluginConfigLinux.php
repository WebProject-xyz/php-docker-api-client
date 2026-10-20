<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class PluginConfigLinux implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<string>
     */
    public array $capabilities;
    /**
     * @var bool
     */
    public bool $allowAllDevices;
    /**
     * @var list<PluginDevice>
     */
    public array $devices;

    public function definedProperties(): array
    {
        return ['capabilities' => 'Capabilities', 'allowAllDevices' => 'AllowAllDevices', 'devices' => 'Devices'];
    }
}
