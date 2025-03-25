<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use ArrayObject;
use function array_key_exists;

class ServiceSpecMode extends ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var ServiceSpecModeReplicated
     */
    protected $replicated;
    /**
     * @var ServiceSpecModeGlobal
     */
    protected $global;
    /**
     * The mode used for services with a finite number of tasks that run
     * to a completed state.
     *
     * @var ServiceSpecModeReplicatedJob
     */
    protected $replicatedJob;
    /**
     * The mode used for services which run a task to the completed state
     * on each valid node.
     *
     * @var ServiceSpecModeGlobalJob
     */
    protected $globalJob;

    /**
     * @return ServiceSpecModeReplicated
     */
    public function getReplicated(): ServiceSpecModeReplicated
    {
        return $this->replicated;
    }

    /**
     * @param ServiceSpecModeReplicated $replicated
     *
     * @return self
     */
    public function setReplicated(ServiceSpecModeReplicated $replicated): self
    {
        $this->initialized['replicated'] = true;
        $this->replicated                = $replicated;

        return $this;
    }

    /**
     * @return ServiceSpecModeGlobal
     */
    public function getGlobal(): ServiceSpecModeGlobal
    {
        return $this->global;
    }

    /**
     * @param ServiceSpecModeGlobal $global
     *
     * @return self
     */
    public function setGlobal(ServiceSpecModeGlobal $global): self
    {
        $this->initialized['global'] = true;
        $this->global                = $global;

        return $this;
    }

    /**
     * The mode used for services with a finite number of tasks that run
     * to a completed state.
     *
     * @return ServiceSpecModeReplicatedJob
     */
    public function getReplicatedJob(): ServiceSpecModeReplicatedJob
    {
        return $this->replicatedJob;
    }

    /**
     * The mode used for services with a finite number of tasks that run
     * to a completed state.
     *
     * @param ServiceSpecModeReplicatedJob $replicatedJob
     *
     * @return self
     */
    public function setReplicatedJob(ServiceSpecModeReplicatedJob $replicatedJob): self
    {
        $this->initialized['replicatedJob'] = true;
        $this->replicatedJob                = $replicatedJob;

        return $this;
    }

    /**
     * The mode used for services which run a task to the completed state
     * on each valid node.
     *
     * @return ServiceSpecModeGlobalJob
     */
    public function getGlobalJob(): ServiceSpecModeGlobalJob
    {
        return $this->globalJob;
    }

    /**
     * The mode used for services which run a task to the completed state
     * on each valid node.
     *
     * @param ServiceSpecModeGlobalJob $globalJob
     *
     * @return self
     */
    public function setGlobalJob(ServiceSpecModeGlobalJob $globalJob): self
    {
        $this->initialized['globalJob'] = true;
        $this->globalJob                = $globalJob;

        return $this;
    }
}
