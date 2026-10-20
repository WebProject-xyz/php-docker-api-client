<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class Platform implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Architecture represents the hardware architecture (for example,
     * `x86_64`).
     *
     * @var string|null
     */
    public ?string $architecture;
    /**
     * OS represents the Operating System (for example, `linux` or `windows`).
     *
     * @var string|null
     */
    public ?string $oS;

    public function definedProperties(): array
    {
        return ['architecture' => 'Architecture', 'oS' => 'OS'];
    }
}
