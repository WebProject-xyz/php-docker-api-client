<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class Address implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * IP address.
     *
     * @var string|null
     */
    public ?string $addr;
    /**
     * Mask length of the IP address.
     *
     * @var int|null
     */
    public ?int $prefixLen;

    public function definedProperties(): array
    {
        return ['addr' => 'Addr', 'prefixLen' => 'PrefixLen'];
    }
}
