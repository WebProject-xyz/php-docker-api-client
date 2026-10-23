<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class DeviceRequest implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The name of the device driver to use for this request.
     *
     * Note that if this is specified the capabilities are ignored when
     * selecting a device driver.
     *
     * @var string|null
     */
    public ?string $driver;
    /**
     * @var int|null
     */
    public ?int $count;
    /**
     * @var list<string>|null
     */
    public ?array $deviceIDs;
    /**
     * A list of capabilities; an OR list of AND lists of capabilities.
     *
     * Note that if a driver is specified the capabilities have no effect on
     * selecting a driver as the driver name is used directly.
     *
     * Note that if no driver is specified the capabilities are used to
     * select a driver with the required capabilities.
     *
     * @var list<list<string>>|null
     */
    public ?array $capabilities;
    /**
     * Driver-specific options, specified as a key/value pairs. These options
     * are passed directly to the driver.
     *
     * @var iterable<string, string>|null
     */
    public ?iterable $options;

    public function definedProperties(): array
    {
        return ['driver' => 'Driver', 'count' => 'Count', 'deviceIDs' => 'DeviceIDs', 'capabilities' => 'Capabilities', 'options' => 'Options'];
    }
}
