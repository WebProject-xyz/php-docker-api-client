<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use ArrayObject;
use function array_key_exists;

class ContainerWaitResponse extends ArrayObject
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
     * Exit code of the container.
     *
     * @var int
     */
    protected $statusCode;
    /**
     * container waiting error, if any.
     *
     * @var ContainerWaitExitError
     */
    protected $error;

    /**
     * Exit code of the container.
     *
     * @return int
     */
    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    /**
     * Exit code of the container.
     *
     * @param int $statusCode
     *
     * @return self
     */
    public function setStatusCode(int $statusCode): self
    {
        $this->initialized['statusCode'] = true;
        $this->statusCode                = $statusCode;

        return $this;
    }

    /**
     * container waiting error, if any.
     *
     * @return ContainerWaitExitError
     */
    public function getError(): ContainerWaitExitError
    {
        return $this->error;
    }

    /**
     * container waiting error, if any.
     *
     * @param ContainerWaitExitError $error
     *
     * @return self
     */
    public function setError(ContainerWaitExitError $error): self
    {
        $this->initialized['error'] = true;
        $this->error                = $error;

        return $this;
    }
}
