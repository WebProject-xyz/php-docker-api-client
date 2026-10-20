<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class DeviceMapping implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string|null
     */
    public ?string $pathOnHost;
    /**
     * @var string|null
     */
    public ?string $pathInContainer;
    /**
     * @var string|null
     */
    public ?string $cgroupPermissions;

    public function definedProperties(): array
    {
        return ['pathOnHost' => 'PathOnHost', 'pathInContainer' => 'PathInContainer', 'cgroupPermissions' => 'CgroupPermissions'];
    }
}
