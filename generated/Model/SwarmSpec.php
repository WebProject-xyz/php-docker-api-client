<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class SwarmSpec implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Name of the swarm.
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
     * Orchestration configuration.
     *
     * @var SwarmSpecOrchestration|null
     */
    public ?SwarmSpecOrchestration $orchestration;
    /**
     * Raft configuration.
     *
     * @var SwarmSpecRaft|null
     */
    public ?SwarmSpecRaft $raft;
    /**
     * Dispatcher configuration.
     *
     * @var SwarmSpecDispatcher|null
     */
    public ?SwarmSpecDispatcher $dispatcher;
    /**
     * CA configuration.
     *
     * @var SwarmSpecCAConfig|null
     */
    public ?SwarmSpecCAConfig $cAConfig;
    /**
     * Parameters related to encryption-at-rest.
     *
     * @var SwarmSpecEncryptionConfig|null
     */
    public ?SwarmSpecEncryptionConfig $encryptionConfig;
    /**
     * Defaults for creating tasks in this cluster.
     *
     * @var SwarmSpecTaskDefaults|null
     */
    public ?SwarmSpecTaskDefaults $taskDefaults;

    public function definedProperties(): array
    {
        return ['name' => 'Name', 'labels' => 'Labels', 'orchestration' => 'Orchestration', 'raft' => 'Raft', 'dispatcher' => 'Dispatcher', 'cAConfig' => 'CAConfig', 'encryptionConfig' => 'EncryptionConfig', 'taskDefaults' => 'TaskDefaults'];
    }
}
