<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use ArrayObject;
use function array_key_exists;

class SecretSpec extends ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * User-defined name of the secret.
     *
     * @var string
     */
    protected $name;
    /**
     * User-defined key/value metadata.
     *
     * @var array<string, string>
     */
    protected $labels;
    /**
     * Data is the data to store as a secret, formatted as a Base64-url-safe-encoded
     * ([RFC 4648](https://tools.ietf.org/html/rfc4648#section-5)) string.
     * It must be empty if the Driver field is set, in which case the data is
     * loaded from an external secret store. The maximum allowed size is 500KB,
     * as defined in [MaxSecretSize](https://pkg.go.dev/github.com/moby/swarmkit/v2@v2.0.0-20250103191802-8c1959736554/api/validation#MaxSecretSize).
     *
     * This field is only used to _create_ a secret, and is not returned by
     * other endpoints.
     *
     * @var string
     */
    protected $data;
    /**
     * Driver represents a driver (network, logging, secrets).
     *
     * @var Driver
     */
    protected $driver;
    /**
     * Driver represents a driver (network, logging, secrets).
     *
     * @var Driver
     */
    protected $templating;

    /**
     * User-defined name of the secret.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * User-defined name of the secret.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name                = $name;

        return $this;
    }

    /**
     * User-defined key/value metadata.
     *
     * @return array<string, string>
     */
    public function getLabels(): iterable
    {
        return $this->labels;
    }

    /**
     * User-defined key/value metadata.
     *
     * @param array<string, string> $labels
     *
     * @return self
     */
    public function setLabels(iterable $labels): self
    {
        $this->initialized['labels'] = true;
        $this->labels                = $labels;

        return $this;
    }

    /**
     * Data is the data to store as a secret, formatted as a Base64-url-safe-encoded
     * ([RFC 4648](https://tools.ietf.org/html/rfc4648#section-5)) string.
     * It must be empty if the Driver field is set, in which case the data is
     * loaded from an external secret store. The maximum allowed size is 500KB,
     * as defined in [MaxSecretSize](https://pkg.go.dev/github.com/moby/swarmkit/v2@v2.0.0-20250103191802-8c1959736554/api/validation#MaxSecretSize).
     *
     * This field is only used to _create_ a secret, and is not returned by
     * other endpoints.
     *
     * @return string
     */
    public function getData(): string
    {
        return $this->data;
    }

    /**
     * Data is the data to store as a secret, formatted as a Base64-url-safe-encoded
     * ([RFC 4648](https://tools.ietf.org/html/rfc4648#section-5)) string.
     * It must be empty if the Driver field is set, in which case the data is
     * loaded from an external secret store. The maximum allowed size is 500KB,
     * as defined in [MaxSecretSize](https://pkg.go.dev/github.com/moby/swarmkit/v2@v2.0.0-20250103191802-8c1959736554/api/validation#MaxSecretSize).
     *
     * This field is only used to _create_ a secret, and is not returned by
     * other endpoints.
     *
     * @param string $data
     *
     * @return self
     */
    public function setData(string $data): self
    {
        $this->initialized['data'] = true;
        $this->data                = $data;

        return $this;
    }

    /**
     * Driver represents a driver (network, logging, secrets).
     *
     * @return Driver
     */
    public function getDriver(): Driver
    {
        return $this->driver;
    }

    /**
     * Driver represents a driver (network, logging, secrets).
     *
     * @param Driver $driver
     *
     * @return self
     */
    public function setDriver(Driver $driver): self
    {
        $this->initialized['driver'] = true;
        $this->driver                = $driver;

        return $this;
    }

    /**
     * Driver represents a driver (network, logging, secrets).
     *
     * @return Driver
     */
    public function getTemplating(): Driver
    {
        return $this->templating;
    }

    /**
     * Driver represents a driver (network, logging, secrets).
     *
     * @param Driver $templating
     *
     * @return self
     */
    public function setTemplating(Driver $templating): self
    {
        $this->initialized['templating'] = true;
        $this->templating                = $templating;

        return $this;
    }
}
