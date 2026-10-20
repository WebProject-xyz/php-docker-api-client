<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use DateTimeInterface;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class TaskStatus implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var DateTimeInterface|null
     */
    public ?DateTimeInterface $timestamp;
    /**
     * @var TaskState
     */
    public TaskState $state;
    /**
     * @var string|null
     */
    public ?string $message;
    /**
     * @var string|null
     */
    public ?string $err;
    /**
     * represents the status of a container.
     *
     * @var ContainerStatus
     */
    public ContainerStatus $containerStatus;
    /**
     * represents the port status of a task's host ports whose service has published host ports.
     *
     * @var PortStatus
     */
    public PortStatus $portStatus;

    public function definedProperties(): array
    {
        return ['timestamp' => 'Timestamp', 'state' => 'State', 'message' => 'Message', 'err' => 'Err', 'containerStatus' => 'ContainerStatus', 'portStatus' => 'PortStatus'];
    }
}
