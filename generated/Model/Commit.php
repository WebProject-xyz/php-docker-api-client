<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class Commit implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Actual commit ID of external tool.
     *
     * @var string|null
     */
    public ?string $iD;

    public function definedProperties(): array
    {
        return ['iD' => 'ID'];
    }
}
