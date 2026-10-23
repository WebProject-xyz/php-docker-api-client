<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class GenericResourcesItemDiscreteResourceSpec implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string|null
     */
    public ?string $kind;
    /**
     * @var int|null
     */
    public ?int $value;

    public function definedProperties(): array
    {
        return ['kind' => 'Kind', 'value' => 'Value'];
    }
}
