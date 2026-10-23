<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class SystemInfoDefaultAddressPoolsItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The network address in CIDR format.
     *
     * @var string|null
     */
    public ?string $base;
    /**
     * The network pool size.
     *
     * @var int|null
     */
    public ?int $size;

    public function definedProperties(): array
    {
        return ['base' => 'Base', 'size' => 'Size'];
    }
}
