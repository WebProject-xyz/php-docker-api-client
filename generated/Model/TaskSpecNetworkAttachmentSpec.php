<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use ArrayObject;
use function array_key_exists;

class TaskSpecNetworkAttachmentSpec extends ArrayObject
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
     * ID of the container represented by this task.
     *
     * @var string
     */
    protected $containerID;

    /**
     * ID of the container represented by this task.
     *
     * @return string
     */
    public function getContainerID(): string
    {
        return $this->containerID;
    }

    /**
     * ID of the container represented by this task.
     *
     * @param string $containerID
     *
     * @return self
     */
    public function setContainerID(string $containerID): self
    {
        $this->initialized['containerID'] = true;
        $this->containerID                = $containerID;

        return $this;
    }
}
