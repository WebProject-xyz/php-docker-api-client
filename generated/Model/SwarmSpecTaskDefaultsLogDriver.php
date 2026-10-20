<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class SwarmSpecTaskDefaultsLogDriver implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The log driver to use as a default for new tasks.
     *
     * @var string|null
     */
    public ?string $name;
    /**
     * Driver-specific options for the selected log driver, specified
     * as key/value pairs.
     *
     * @var iterable<string, string>|null
     */
    public ?iterable $options;

    public function definedProperties(): array
    {
        return ['name' => 'Name', 'options' => 'Options'];
    }
}
