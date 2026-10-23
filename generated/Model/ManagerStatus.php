<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ManagerStatus implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var bool|null
     */
    public ?bool $leader = false;
    /**
     * Reachability represents the reachability of a node.
     *
     * @var Reachability
     */
    public Reachability $reachability;
    /**
     * The IP address and port at which the manager is reachable.
     *
     * @var string|null
     */
    public ?string $addr;

    public function definedProperties(): array
    {
        return ['leader' => 'Leader', 'reachability' => 'Reachability', 'addr' => 'Addr'];
    }
}
