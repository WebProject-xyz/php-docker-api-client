<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class SwarmSpecRaft implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The number of log entries between snapshots.
     *
     * @var int|null
     */
    public ?int $snapshotInterval;
    /**
     * The number of snapshots to keep beyond the current snapshot.
     *
     * @var int|null
     */
    public ?int $keepOldSnapshots;
    /**
     * The number of log entries to keep around to sync up slow followers
     * after a snapshot is created.
     *
     * @var int|null
     */
    public ?int $logEntriesForSlowFollowers;
    /**
     * The number of ticks that a follower will wait for a message from
     * the leader before becoming a candidate and starting an election.
     * `ElectionTick` must be greater than `HeartbeatTick`.
     *
     * A tick currently defaults to one second, so these translate
     * directly to seconds currently, but this is NOT guaranteed.
     *
     * @var int|null
     */
    public ?int $electionTick;
    /**
     * The number of ticks between heartbeats. Every HeartbeatTick ticks,
     * the leader will send a heartbeat to the followers.
     *
     * A tick currently defaults to one second, so these translate
     * directly to seconds currently, but this is NOT guaranteed.
     *
     * @var int|null
     */
    public ?int $heartbeatTick;

    public function definedProperties(): array
    {
        return ['snapshotInterval' => 'SnapshotInterval', 'keepOldSnapshots' => 'KeepOldSnapshots', 'logEntriesForSlowFollowers' => 'LogEntriesForSlowFollowers', 'electionTick' => 'ElectionTick', 'heartbeatTick' => 'HeartbeatTick'];
    }
}
