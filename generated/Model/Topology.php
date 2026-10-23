<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class Topology implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var iterable<string, string>|null
     */
    public ?iterable $segments;

    public function definedProperties(): array
    {
        return ['segments' => 'Segments'];
    }
}
