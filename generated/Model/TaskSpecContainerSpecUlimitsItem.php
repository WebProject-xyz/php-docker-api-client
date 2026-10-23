<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class TaskSpecContainerSpecUlimitsItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Name of ulimit.
     *
     * @var string|null
     */
    public ?string $name;
    /**
     * Soft limit.
     *
     * @var int|null
     */
    public ?int $soft;
    /**
     * Hard limit.
     *
     * @var int|null
     */
    public ?int $hard;

    public function definedProperties(): array
    {
        return ['name' => 'Name', 'soft' => 'Soft', 'hard' => 'Hard'];
    }
}
