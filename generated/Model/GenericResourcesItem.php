<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class GenericResourcesItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var GenericResourcesItemNamedResourceSpec|null
     */
    public ?GenericResourcesItemNamedResourceSpec $namedResourceSpec;
    /**
     * @var GenericResourcesItemDiscreteResourceSpec|null
     */
    public ?GenericResourcesItemDiscreteResourceSpec $discreteResourceSpec;

    public function definedProperties(): array
    {
        return ['namedResourceSpec' => 'NamedResourceSpec', 'discreteResourceSpec' => 'DiscreteResourceSpec'];
    }
}
