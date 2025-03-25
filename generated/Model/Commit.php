<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use ArrayObject;
use function array_key_exists;

class Commit extends ArrayObject
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
     * Actual commit ID of external tool.
     *
     * @var string
     */
    protected $iD;
    /**
     * Commit ID of external tool expected by dockerd as set at build time.
     **Deprecated**: This field is deprecated and will be omitted in a API v1.49.
     *
     * @var string
     */
    protected $expected;

    /**
     * Actual commit ID of external tool.
     *
     * @return string
     */
    public function getID(): string
    {
        return $this->iD;
    }

    /**
     * Actual commit ID of external tool.
     *
     * @param string $iD
     *
     * @return self
     */
    public function setID(string $iD): self
    {
        $this->initialized['iD'] = true;
        $this->iD                = $iD;

        return $this;
    }

    /**
     * Commit ID of external tool expected by dockerd as set at build time.
     **Deprecated**: This field is deprecated and will be omitted in a API v1.49.
     *
     * @return string
     */
    public function getExpected(): string
    {
        return $this->expected;
    }

    /**
     * Commit ID of external tool expected by dockerd as set at build time.
     **Deprecated**: This field is deprecated and will be omitted in a API v1.49.
     *
     * @param string $expected
     *
     * @return self
     */
    public function setExpected(string $expected): self
    {
        $this->initialized['expected'] = true;
        $this->expected                = $expected;

        return $this;
    }
}
