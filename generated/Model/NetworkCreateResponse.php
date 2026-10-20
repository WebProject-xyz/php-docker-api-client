<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class NetworkCreateResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The ID of the created network.
     *
     * @var string
     */
    public string $id;
    /**
     * Warnings encountered when creating the container.
     *
     * @var string
     */
    public string $warning;

    public function definedProperties(): array
    {
        return ['id' => 'Id', 'warning' => 'Warning'];
    }
}
