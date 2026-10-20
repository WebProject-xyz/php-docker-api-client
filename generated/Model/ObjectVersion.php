<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ObjectVersion implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var int|null
     */
    public ?int $index;

    public function definedProperties(): array
    {
        return ['index' => 'Index'];
    }
}
