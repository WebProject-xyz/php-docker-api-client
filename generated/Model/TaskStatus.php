<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use ArrayObject;
use function array_key_exists;

class TaskStatus extends ArrayObject
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
    protected $timestamp;
    /**
     * @var string
     */
    protected $state;
    /**
     * @var string
     */
    protected $message;
    /**
     * @var string
     */
    protected $err;
    /**
     * represents the status of a container.
     *
     * @var ContainerStatus
     */
    protected $containerStatus;
    /**
     * represents the port status of a task's host ports whose service has published host ports.
     *
     * @var PortStatus
     */
    protected $portStatus;

    /**
     * @return string
     */
    public function getTimestamp(): string
    {
        return $this->timestamp;
    }

    /**
     * @param string $timestamp
     *
     * @return self
     */
    public function setTimestamp(string $timestamp): self
    {
        $this->initialized['timestamp'] = true;
        $this->timestamp                = $timestamp;

        return $this;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state): self
    {
        $this->initialized['state'] = true;
        $this->state                = $state;

        return $this;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message): self
    {
        $this->initialized['message'] = true;
        $this->message                = $message;

        return $this;
    }

    /**
     * @return string
     */
    public function getErr(): string
    {
        return $this->err;
    }

    /**
     * @param string $err
     *
     * @return self
     */
    public function setErr(string $err): self
    {
        $this->initialized['err'] = true;
        $this->err                = $err;

        return $this;
    }

    /**
     * represents the status of a container.
     *
     * @return ContainerStatus
     */
    public function getContainerStatus(): ContainerStatus
    {
        return $this->containerStatus;
    }

    /**
     * represents the status of a container.
     *
     * @param ContainerStatus $containerStatus
     *
     * @return self
     */
    public function setContainerStatus(ContainerStatus $containerStatus): self
    {
        $this->initialized['containerStatus'] = true;
        $this->containerStatus                = $containerStatus;

        return $this;
    }

    /**
     * represents the port status of a task's host ports whose service has published host ports.
     *
     * @return PortStatus
     */
    public function getPortStatus(): PortStatus
    {
        return $this->portStatus;
    }

    /**
     * represents the port status of a task's host ports whose service has published host ports.
     *
     * @param PortStatus $portStatus
     *
     * @return self
     */
    public function setPortStatus(PortStatus $portStatus): self
    {
        $this->initialized['portStatus'] = true;
        $this->portStatus                = $portStatus;

        return $this;
    }
}
