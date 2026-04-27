<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use function array_key_exists;

class Commit
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
     * @var string|null
     */
    protected $iD;

    /**
     * Actual commit ID of external tool.
     *
     * @return string|null
     */
    public function getID(): ?string
    {
        return $this->iD;
    }

    /**
     * Actual commit ID of external tool.
     *
     * @param string|null $iD
     *
     * @return self
     */
    public function setID(?string $iD): self
    {
        $this->initialized['iD'] = true;
        $this->iD                = $iD;

        return $this;
    }
}
