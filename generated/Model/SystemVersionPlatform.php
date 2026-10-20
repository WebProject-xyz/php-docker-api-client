<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class SystemVersionPlatform implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $name;

    public function definedProperties(): array
    {
        return ['name' => 'Name'];
    }
}
