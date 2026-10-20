<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ConfigsCreatePostBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * User-defined name of the config.
     *
     * @var string|null
     */
    public ?string $name;
    /**
     * User-defined key/value metadata.
     *
     * @var iterable<string, string>|null
     */
    public ?iterable $labels;
    /**
     * Data is the data to store as a config, formatted as a standard base64-encoded
     * ([RFC 4648](https://tools.ietf.org/html/rfc4648#section-4)) string.
     * The maximum allowed size is 1000KB, as defined in [MaxConfigSize](https://pkg.go.dev/github.com/moby/swarmkit/v2@v2.0.0-20250103191802-8c1959736554/manager/controlapi#MaxConfigSize).
     *
     * @var string|null
     */
    public ?string $data;
    /**
     * Driver represents a driver (network, logging, secrets).
     *
     * @var Driver
     */
    public Driver $templating;

    public function definedProperties(): array
    {
        return ['name' => 'Name', 'labels' => 'Labels', 'data' => 'Data', 'templating' => 'Templating'];
    }
}
