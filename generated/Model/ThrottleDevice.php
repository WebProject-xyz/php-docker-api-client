<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ThrottleDevice implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Device path.
     *
     * @var string|null
     */
    public ?string $path;
    /**
     * Rate.
     *
     * @var int|null
     */
    public ?int $rate;

    public function definedProperties(): array
    {
        return ['path' => 'Path', 'rate' => 'Rate'];
    }
}
