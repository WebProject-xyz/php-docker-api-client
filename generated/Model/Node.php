<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use DateTimeInterface;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class Node implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
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
     * Date and time at which the node was added to the swarm in
     * [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
     *
     * @var DateTimeInterface|null
     */
    public ?DateTimeInterface $createdAt;
    /**
     * Date and time at which the node was last updated in
     * [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
     *
     * @var DateTimeInterface|null
     */
    public ?DateTimeInterface $updatedAt;
    /**
     * @var NodeSpec
     */
    public NodeSpec $spec;
    /**
     * NodeDescription encapsulates the properties of the Node as reported by the
     * agent.
     *
     * @var NodeDescription
     */
    public NodeDescription $description;
    /**
     * NodeStatus represents the status of a node.
     *
     * It provides the current status of the node, as seen by the manager.
     *
     * @var NodeStatus
     */
    public NodeStatus $status;
    /**
     * ManagerStatus represents the status of a manager.
     *
     * It provides the current status of a node's manager component, if the node
     * is a manager.
     *
     * @var ManagerStatus|null
     */
    public ?ManagerStatus $managerStatus;

    public function definedProperties(): array
    {
        return ['iD' => 'ID', 'version' => 'Version', 'createdAt' => 'CreatedAt', 'updatedAt' => 'UpdatedAt', 'spec' => 'Spec', 'description' => 'Description', 'status' => 'Status', 'managerStatus' => 'ManagerStatus'];
    }
}
