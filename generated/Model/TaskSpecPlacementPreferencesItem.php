<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class TaskSpecPlacementPreferencesItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var TaskSpecPlacementPreferencesItemSpread|null
     */
    public ?TaskSpecPlacementPreferencesItemSpread $spread;

    public function definedProperties(): array
    {
        return ['spread' => 'Spread'];
    }
}
