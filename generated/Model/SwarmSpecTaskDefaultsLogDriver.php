<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use ArrayObject;
use function array_key_exists;

class SwarmSpecTaskDefaultsLogDriver extends ArrayObject
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
     * The log driver to use as a default for new tasks.
     *
     * @var string
     */
    protected $name;
    /**
     * Driver-specific options for the selected log driver, specified
     * as key/value pairs.
     *
     * @var array<string, string>
     */
    protected $options;

    /**
     * The log driver to use as a default for new tasks.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * The log driver to use as a default for new tasks.
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
     * Driver-specific options for the selected log driver, specified
     * as key/value pairs.
     *
     * @return array<string, string>
     */
    public function getOptions(): iterable
    {
        return $this->options;
    }

    /**
     * Driver-specific options for the selected log driver, specified
     * as key/value pairs.
     *
     * @param array<string, string> $options
     *
     * @return self
     */
    public function setOptions(iterable $options): self
    {
        $this->initialized['options'] = true;
        $this->options                = $options;

        return $this;
    }
}
