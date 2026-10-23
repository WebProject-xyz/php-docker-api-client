<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class OCIPlatform implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The CPU architecture, for example `amd64` or `ppc64`.
     *
     * @var string|null
     */
    public ?string $architecture;
    /**
     * The operating system, for example `linux` or `windows`.
     *
     * @var string|null
     */
    public ?string $os;
    /**
     * Optional field specifying the operating system version, for example on
     * Windows `10.0.19041.1165`.
     *
     * @var string|null
     */
    public ?string $osVersion;
    /**
     * Optional field specifying an array of strings, each listing a required
     * OS feature (for example on Windows `win32k`).
     *
     * @var list<string>|null
     */
    public ?array $osFeatures;
    /**
     * Optional field specifying a variant of the CPU, for example `v7` to
     * specify ARMv7 when architecture is `arm`.
     *
     * @var string|null
     */
    public ?string $variant;

    public function definedProperties(): array
    {
        return ['architecture' => 'architecture', 'os' => 'os', 'osVersion' => 'os.version', 'osFeatures' => 'os.features', 'variant' => 'variant'];
    }
}
