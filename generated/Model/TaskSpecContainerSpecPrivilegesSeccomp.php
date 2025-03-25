<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use ArrayObject;
use function array_key_exists;

class TaskSpecContainerSpecPrivilegesSeccomp extends ArrayObject
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
     * @var string
     */
    protected $mode;
    /**
     * The custom seccomp profile as a json object.
     *
     * @var string
     */
    protected $profile;

    /**
     * @return string
     */
    public function getMode(): string
    {
        return $this->mode;
    }

    /**
     * @param string $mode
     *
     * @return self
     */
    public function setMode(string $mode): self
    {
        $this->initialized['mode'] = true;
        $this->mode                = $mode;

        return $this;
    }

    /**
     * The custom seccomp profile as a json object.
     *
     * @return string
     */
    public function getProfile(): string
    {
        return $this->profile;
    }

    /**
     * The custom seccomp profile as a json object.
     *
     * @param string $profile
     *
     * @return self
     */
    public function setProfile(string $profile): self
    {
        $this->initialized['profile'] = true;
        $this->profile                = $profile;

        return $this;
    }
}
