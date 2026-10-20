<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class SecretsCreatePostBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * User-defined name of the secret.
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
     * Data is the data to store as a secret, formatted as a standard base64-encoded
     * ([RFC 4648](https://tools.ietf.org/html/rfc4648#section-4)) string.
     * It must be empty if the Driver field is set, in which case the data is
     * loaded from an external secret store. The maximum allowed size is 500KB,
     * as defined in [MaxSecretSize](https://pkg.go.dev/github.com/moby/swarmkit/v2@v2.0.0/api/validation#MaxSecretSize).
     *
     * This field is only used to _create_ a secret, and is not returned by
     * other endpoints.
     *
     * @var string|null
     */
    public ?string $data;
    /**
     * Driver represents a driver (network, logging, secrets).
     *
     * @var Driver
     */
    public Driver $driver;
    /**
     * Driver represents a driver (network, logging, secrets).
     *
     * @var Driver
     */
    public Driver $templating;

    public function definedProperties(): array
    {
        return ['name' => 'Name', 'labels' => 'Labels', 'data' => 'Data', 'driver' => 'Driver', 'templating' => 'Templating'];
    }
}
