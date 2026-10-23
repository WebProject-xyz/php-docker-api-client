<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class HostConfigLogConfig implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Name of the logging driver used for the container or "none"
     * if logging is disabled.
     *
     * @var string|null
     */
    public ?string $type;
    /**
     * Driver-specific configuration options for the logging driver.
     *
     * @var iterable<string, string>|null
     */
    public ?iterable $config;

    public function definedProperties(): array
    {
        return ['type' => 'Type', 'config' => 'Config'];
    }
}
