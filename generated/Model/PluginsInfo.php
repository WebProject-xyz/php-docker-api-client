<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class PluginsInfo implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Names of available volume-drivers, and network-driver plugins.
     *
     * @var list<string>|null
     */
    public ?array $volume;
    /**
     * Names of available network-drivers, and network-driver plugins.
     *
     * @var list<string>|null
     */
    public ?array $network;
    /**
     * Names of available authorization plugins.
     *
     * @var list<string>|null
     */
    public ?array $authorization;
    /**
     * Names of available logging-drivers, and logging-driver plugins.
     *
     * @var list<string>|null
     */
    public ?array $log;

    public function definedProperties(): array
    {
        return ['volume' => 'Volume', 'network' => 'Network', 'authorization' => 'Authorization', 'log' => 'Log'];
    }
}
