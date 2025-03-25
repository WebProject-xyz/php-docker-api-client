<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use ArrayObject;
use function array_key_exists;

class ContainerBlkioStatEntry extends ArrayObject
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
     * @var int
     */
    protected $major;
    /**
     * @var int
     */
    protected $minor;
    /**
     * @var string
     */
    protected $op;
    /**
     * @var int
     */
    protected $value;

    /**
     * @return int
     */
    public function getMajor(): int
    {
        return $this->major;
    }

    /**
     * @param int $major
     *
     * @return self
     */
    public function setMajor(int $major): self
    {
        $this->initialized['major'] = true;
        $this->major                = $major;

        return $this;
    }

    /**
     * @return int
     */
    public function getMinor(): int
    {
        return $this->minor;
    }

    /**
     * @param int $minor
     *
     * @return self
     */
    public function setMinor(int $minor): self
    {
        $this->initialized['minor'] = true;
        $this->minor                = $minor;

        return $this;
    }

    /**
     * @return string
     */
    public function getOp(): string
    {
        return $this->op;
    }

    /**
     * @param string $op
     *
     * @return self
     */
    public function setOp(string $op): self
    {
        $this->initialized['op'] = true;
        $this->op                = $op;

        return $this;
    }

    /**
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }

    /**
     * @param int $value
     *
     * @return self
     */
    public function setValue(int $value): self
    {
        $this->initialized['value'] = true;
        $this->value                = $value;

        return $this;
    }
}
