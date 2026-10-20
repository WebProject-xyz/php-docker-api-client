<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ContainerBlkioStatEntry implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var int|null
     */
    public ?int $major;
    /**
     * @var int|null
     */
    public ?int $minor;
    /**
     * @var string|null
     */
    public ?string $op;
    /**
     * @var int|null
     */
    public ?int $value;

    public function definedProperties(): array
    {
        return ['major' => 'major', 'minor' => 'minor', 'op' => 'op', 'value' => 'value'];
    }
}
