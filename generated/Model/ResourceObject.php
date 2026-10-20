<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ResourceObject implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var int|null
     */
    public ?int $nanoCPUs;
    /**
     * @var int|null
     */
    public ?int $memoryBytes;
    /**
     * User-defined resources can be either Integer resources (e.g, `SSD=3`) or
     * String resources (e.g, `GPU=UUID1`).
     *
     * @var list<GenericResourcesItem>
     */
    public array $genericResources;

    public function definedProperties(): array
    {
        return ['nanoCPUs' => 'NanoCPUs', 'memoryBytes' => 'MemoryBytes', 'genericResources' => 'GenericResources'];
    }
}
