<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use function array_key_exists;

class ServiceSpecMode
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
     * @var ServiceSpecModeReplicated|null
     */
    protected $replicated;
    /**
     * @var mixed|null
     */
    protected $global;
    /**
     * The mode used for services with a finite number of tasks that run
     * to a completed state.
     *
     * @var ServiceSpecModeReplicatedJob|null
     */
    protected $replicatedJob;
    /**
     * The mode used for services which run a task to the completed state
     * on each valid node.
     *
     * @var mixed|null
     */
    protected $globalJob;

    /**
     * @return ServiceSpecModeReplicated|null
     */
    public function getReplicated(): ?ServiceSpecModeReplicated
    {
        return $this->replicated;
    }

    /**
     * @param ServiceSpecModeReplicated|null $replicated
     *
     * @return self
     */
    public function setReplicated(?ServiceSpecModeReplicated $replicated): self
    {
        $this->initialized['replicated'] = true;
        $this->replicated                = $replicated;

        return $this;
    }

    /**
     * @return mixed|null
     */
    public function getGlobal()
    {
        return $this->global;
    }

    /**
     * @param mixed|null $global
     *
     * @return self
     */
    public function setGlobal($global): self
    {
        $this->initialized['global'] = true;
        $this->global                = $global;

        return $this;
    }

    /**
     * The mode used for services with a finite number of tasks that run
     * to a completed state.
     *
     * @return ServiceSpecModeReplicatedJob|null
     */
    public function getReplicatedJob(): ?ServiceSpecModeReplicatedJob
    {
        return $this->replicatedJob;
    }

    /**
     * The mode used for services with a finite number of tasks that run
     * to a completed state.
     *
     * @param ServiceSpecModeReplicatedJob|null $replicatedJob
     *
     * @return self
     */
    public function setReplicatedJob(?ServiceSpecModeReplicatedJob $replicatedJob): self
    {
        $this->initialized['replicatedJob'] = true;
        $this->replicatedJob                = $replicatedJob;

        return $this;
    }

    /**
     * The mode used for services which run a task to the completed state
     * on each valid node.
     *
     * @return mixed|null
     */
    public function getGlobalJob()
    {
        return $this->globalJob;
    }

    /**
     * The mode used for services which run a task to the completed state
     * on each valid node.
     *
     * @param mixed|null $globalJob
     *
     * @return self
     */
    public function setGlobalJob($globalJob): self
    {
        $this->initialized['globalJob'] = true;
        $this->globalJob                = $globalJob;

        return $this;
    }
}
