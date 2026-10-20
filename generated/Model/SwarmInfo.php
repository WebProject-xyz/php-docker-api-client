<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class SwarmInfo implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Unique identifier of for this node in the swarm.
     *
     * @var string|null
     */
    public ?string $nodeID = '';
    /**
     * IP address at which this node can be reached by other nodes in the
     * swarm.
     *
     * @var string|null
     */
    public ?string $nodeAddr = '';
    /**
     * Current local status of this node.
     *
     * @var LocalNodeState
     */
    public LocalNodeState $localNodeState = '';
    /**
     * @var bool|null
     */
    public ?bool $controlAvailable = false;
    /**
     * @var string|null
     */
    public ?string $error = '';
    /**
     * List of ID's and addresses of other managers in the swarm.
     *
     * @var list<PeerNode>|null
     */
    public ?array $remoteManagers;
    /**
     * Total number of nodes in the swarm.
     *
     * @var int|null
     */
    public ?int $nodes;
    /**
     * Total number of managers in the swarm.
     *
     * @var int|null
     */
    public ?int $managers;
    /**
     * ClusterInfo represents information about the swarm as is returned by the
     * "/info" endpoint. Join-tokens are not included.
     *
     * @var ClusterInfo|null
     */
    public ?ClusterInfo $cluster;

    public function definedProperties(): array
    {
        return ['nodeID' => 'NodeID', 'nodeAddr' => 'NodeAddr', 'localNodeState' => 'LocalNodeState', 'controlAvailable' => 'ControlAvailable', 'error' => 'Error', 'remoteManagers' => 'RemoteManagers', 'nodes' => 'Nodes', 'managers' => 'Managers', 'cluster' => 'Cluster'];
    }
}
