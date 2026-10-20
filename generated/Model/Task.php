<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use DateTimeInterface;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class Task implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The ID of the task.
     *
     * @var string|null
     */
    public ?string $iD;
    /**
     * The version number of the object such as node, service, etc. This is needed
     * to avoid conflicting writes. The client must send the version number along
     * with the modified specification when updating these objects.
     *
     * This approach ensures safe concurrency and determinism in that the change
     * on the object may not be applied if the version number has changed from the
     * last read. In other words, if two update requests specify the same base
     * version, only one of the requests can succeed. As a result, two separate
     * update requests that happen at the same time will not unintentionally
     * overwrite each other.
     *
     * @var ObjectVersion
     */
    public ObjectVersion $version;
    /**
     * @var DateTimeInterface|null
     */
    public ?DateTimeInterface $createdAt;
    /**
     * @var DateTimeInterface|null
     */
    public ?DateTimeInterface $updatedAt;
    /**
     * Name of the task.
     *
     * @var string|null
     */
    public ?string $name;
    /**
     * User-defined key/value metadata.
     *
     * @var iterable<string, string>|null
     */
    public ?iterable $labels;
    /**
     * User modifiable task configuration.
     *
     * @var TaskSpec
     */
    public TaskSpec $spec;
    /**
     * The ID of the service this task is part of.
     *
     * @var string|null
     */
    public ?string $serviceID;
    /**
     * @var int|null
     */
    public ?int $slot;
    /**
     * The ID of the node that this task is on.
     *
     * @var string|null
     */
    public ?string $nodeID;
    /**
     * User-defined resources can be either Integer resources (e.g, `SSD=3`) or
     * String resources (e.g, `GPU=UUID1`).
     *
     * @var list<GenericResourcesItem>
     */
    public array $assignedGenericResources;
    /**
     * represents the status of a task.
     *
     * @var TaskStatus
     */
    public TaskStatus $status;
    /**
     * @var TaskState
     */
    public TaskState $desiredState;
    /**
     * The version number of the object such as node, service, etc. This is needed
     * to avoid conflicting writes. The client must send the version number along
     * with the modified specification when updating these objects.
     *
     * This approach ensures safe concurrency and determinism in that the change
     * on the object may not be applied if the version number has changed from the
     * last read. In other words, if two update requests specify the same base
     * version, only one of the requests can succeed. As a result, two separate
     * update requests that happen at the same time will not unintentionally
     * overwrite each other.
     *
     * @var ObjectVersion
     */
    public ObjectVersion $jobIteration;

    public function definedProperties(): array
    {
        return ['iD' => 'ID', 'version' => 'Version', 'createdAt' => 'CreatedAt', 'updatedAt' => 'UpdatedAt', 'name' => 'Name', 'labels' => 'Labels', 'spec' => 'Spec', 'serviceID' => 'ServiceID', 'slot' => 'Slot', 'nodeID' => 'NodeID', 'assignedGenericResources' => 'AssignedGenericResources', 'status' => 'Status', 'desiredState' => 'DesiredState', 'jobIteration' => 'JobIteration'];
    }
}
