<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class PeerNode implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Unique identifier of for this node in the swarm.
     *
     * @var string|null
     */
    public ?string $nodeID;
    /**
     * IP address and ports at which this node can be reached.
     *
     * @var string|null
     */
    public ?string $addr;

    public function definedProperties(): array
    {
        return ['nodeID' => 'NodeID', 'addr' => 'Addr'];
    }
}
