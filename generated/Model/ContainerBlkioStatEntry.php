<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use function array_key_exists;

class ContainerBlkioStatEntry
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
     * @var int|null
     */
    protected $major;
    /**
     * @var int|null
     */
    protected $minor;
    /**
     * @var string|null
     */
    protected $op;
    /**
     * @var int|null
     */
    protected $value;

    /**
     * @return int|null
     */
    public function getMajor(): ?int
    {
        return $this->major;
    }

    /**
     * @param int|null $major
     *
     * @return self
     */
    public function setMajor(?int $major): self
    {
        $this->initialized['major'] = true;
        $this->major                = $major;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getMinor(): ?int
    {
        return $this->minor;
    }

    /**
     * @param int|null $minor
     *
     * @return self
     */
    public function setMinor(?int $minor): self
    {
        $this->initialized['minor'] = true;
        $this->minor                = $minor;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getOp(): ?string
    {
        return $this->op;
    }

    /**
     * @param string|null $op
     *
     * @return self
     */
    public function setOp(?string $op): self
    {
        $this->initialized['op'] = true;
        $this->op                = $op;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getValue(): ?int
    {
        return $this->value;
    }

    /**
     * @param int|null $value
     *
     * @return self
     */
    public function setValue(?int $value): self
    {
        $this->initialized['value'] = true;
        $this->value                = $value;

        return $this;
    }
}
