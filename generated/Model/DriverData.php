<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class DriverData implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Name of the storage driver.
     *
     * @var string
     */
    public string $name;
    /**
     * Low-level storage metadata, provided as key/value pairs.
     *
     * This information is driver-specific, and depends on the storage-driver
     * in use, and should be used for informational purposes only.
     *
     * @var iterable<string, string>
     */
    public iterable $data;

    public function definedProperties(): array
    {
        return ['name' => 'Name', 'data' => 'Data'];
    }
}
