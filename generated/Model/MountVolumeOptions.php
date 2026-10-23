<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class MountVolumeOptions implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Populate volume with data from the target.
     *
     * @var bool|null
     */
    public ?bool $noCopy = false;
    /**
     * User-defined key/value metadata.
     *
     * @var iterable<string, string>|null
     */
    public ?iterable $labels;
    /**
     * Map of driver specific options.
     *
     * @var MountVolumeOptionsDriverConfig|null
     */
    public ?MountVolumeOptionsDriverConfig $driverConfig;
    /**
     * Source path inside the volume. Must be relative without any back traversals.
     *
     * @var string|null
     */
    public ?string $subpath;

    public function definedProperties(): array
    {
        return ['noCopy' => 'NoCopy', 'labels' => 'Labels', 'driverConfig' => 'DriverConfig', 'subpath' => 'Subpath'];
    }
}
