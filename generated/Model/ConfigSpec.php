<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use ArrayObject;
use function array_key_exists;

class ConfigSpec extends ArrayObject
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
     * User-defined name of the config.
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
     * Base64-url-safe-encoded ([RFC 4648](https://tools.ietf.org/html/rfc4648#section-5))
     * config data.
     *
     * @var string
     */
    protected $data;
    /**
     * Driver represents a driver (network, logging, secrets).
     *
     * @var Driver
     */
    protected $templating;

    /**
     * User-defined name of the config.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * User-defined name of the config.
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
     * Base64-url-safe-encoded ([RFC 4648](https://tools.ietf.org/html/rfc4648#section-5))
     * config data.
     *
     * @return string
     */
    public function getData(): string
    {
        return $this->data;
    }

    /**
     * Base64-url-safe-encoded ([RFC 4648](https://tools.ietf.org/html/rfc4648#section-5))
     * config data.
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
