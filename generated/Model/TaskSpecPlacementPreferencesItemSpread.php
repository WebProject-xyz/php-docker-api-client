<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class TaskSpecPlacementPreferencesItemSpread implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * label descriptor, such as `engine.labels.az`.
     *
     * @var string|null
     */
    public ?string $spreadDescriptor;

    public function definedProperties(): array
    {
        return ['spreadDescriptor' => 'SpreadDescriptor'];
    }
}
