<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class MountVolumeOptionsDriverConfig implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Name of the driver to use to create the volume.
     *
     * @var string|null
     */
    public ?string $name;
    /**
     * key/value map of driver specific options.
     *
     * @var iterable<string, string>|null
     */
    public ?iterable $options;

    public function definedProperties(): array
    {
        return ['name' => 'Name', 'options' => 'Options'];
    }
}
