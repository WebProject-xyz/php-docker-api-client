<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class NodeStatus implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * NodeState represents the state of a node.
     *
     * @var NodeState
     */
    public NodeState $state;
    /**
     * @var string|null
     */
    public ?string $message;
    /**
     * IP address of the node.
     *
     * @var string|null
     */
    public ?string $addr;

    public function definedProperties(): array
    {
        return ['state' => 'State', 'message' => 'Message', 'addr' => 'Addr'];
    }
}
