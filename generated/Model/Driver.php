<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class Driver implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Name of the driver.
     *
     * @var string
     */
    public string $name;
    /**
     * Key/value map of driver-specific options.
     *
     * @var iterable<string, string>
     */
    public iterable $options;

    public function definedProperties(): array
    {
        return ['name' => 'Name', 'options' => 'Options'];
    }
}
