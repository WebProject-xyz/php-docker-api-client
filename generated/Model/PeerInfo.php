<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class PeerInfo implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * ID of the peer-node in the Swarm cluster.
     *
     * @var string|null
     */
    public ?string $name;
    /**
     * IP-address of the peer-node in the Swarm cluster.
     *
     * @var string|null
     */
    public ?string $iP;

    public function definedProperties(): array
    {
        return ['name' => 'Name', 'iP' => 'IP'];
    }
}
