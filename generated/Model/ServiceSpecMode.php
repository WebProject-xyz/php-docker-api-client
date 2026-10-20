<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ServiceSpecMode implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var ServiceSpecModeReplicated|null
     */
    public ?ServiceSpecModeReplicated $replicated;
    /**
     * @var mixed|null
     */
    public $global;
    /**
     * The mode used for services with a finite number of tasks that run
     * to a completed state.
     *
     * @var ServiceSpecModeReplicatedJob|null
     */
    public ?ServiceSpecModeReplicatedJob $replicatedJob;
    /**
     * The mode used for services which run a task to the completed state
     * on each valid node.
     *
     * @var mixed|null
     */
    public $globalJob;

    public function definedProperties(): array
    {
        return ['replicated' => 'Replicated', 'global' => 'Global', 'replicatedJob' => 'ReplicatedJob', 'globalJob' => 'GlobalJob'];
    }
}
