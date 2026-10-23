<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class SwarmSpecDispatcher implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The delay for an agent to send a heartbeat to the dispatcher.
     *
     * @var int|null
     */
    public ?int $heartbeatPeriod;

    public function definedProperties(): array
    {
        return ['heartbeatPeriod' => 'HeartbeatPeriod'];
    }
}
