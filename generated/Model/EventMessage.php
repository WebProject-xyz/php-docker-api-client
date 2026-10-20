<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class EventMessage implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The type of object emitting the event.
     *
     * @var string|null
     */
    public ?string $type;
    /**
     * The type of event.
     *
     * @var string|null
     */
    public ?string $action;
    /**
     * Actor describes something that generates events, like a container, network,
     * or a volume.
     *
     * @var EventActor
     */
    public EventActor $actor;
    /**
     * Scope of the event. Engine events are `local` scope. Cluster (Swarm)
     * events are `swarm` scope.
     *
     * @var string|null
     */
    public ?string $scope;
    /**
     * Timestamp of event.
     *
     * @var int|null
     */
    public ?int $time;
    /**
     * Timestamp of event, with nanosecond accuracy.
     *
     * @var int|null
     */
    public ?int $timeNano;

    public function definedProperties(): array
    {
        return ['type' => 'Type', 'action' => 'Action', 'actor' => 'Actor', 'scope' => 'scope', 'time' => 'time', 'timeNano' => 'timeNano'];
    }
}
