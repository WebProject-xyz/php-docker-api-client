<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use ArrayObject;
use function array_key_exists;

class HostConfigLogConfig extends ArrayObject
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
     * Name of the logging driver used for the container or "none"
     * if logging is disabled.
     *
     * @var string
     */
    protected $type;
    /**
     * Driver-specific configuration options for the logging driver.
     *
     * @var array<string, string>
     */
    protected $config;

    /**
     * Name of the logging driver used for the container or "none"
     * if logging is disabled.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Name of the logging driver used for the container or "none"
     * if logging is disabled.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type                = $type;

        return $this;
    }

    /**
     * Driver-specific configuration options for the logging driver.
     *
     * @return array<string, string>
     */
    public function getConfig(): iterable
    {
        return $this->config;
    }

    /**
     * Driver-specific configuration options for the logging driver.
     *
     * @param array<string, string> $config
     *
     * @return self
     */
    public function setConfig(iterable $config): self
    {
        $this->initialized['config'] = true;
        $this->config                = $config;

        return $this;
    }
}
