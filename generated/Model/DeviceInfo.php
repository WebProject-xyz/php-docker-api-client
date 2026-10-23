<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class DeviceInfo implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The origin device driver.
     *
     * @var string|null
     */
    public ?string $source;
    /**
     * The unique identifier for the device within its source driver.
     * For CDI devices, this would be an FQDN like "vendor.com/gpu=0".
     *
     * @var string|null
     */
    public ?string $iD;

    public function definedProperties(): array
    {
        return ['source' => 'Source', 'iD' => 'ID'];
    }
}
