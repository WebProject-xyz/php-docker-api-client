<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ResourcesBlkioWeightDeviceItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string|null
     */
    public ?string $path;
    /**
     * @var int|null
     */
    public ?int $weight;

    public function definedProperties(): array
    {
        return ['path' => 'Path', 'weight' => 'Weight'];
    }
}
