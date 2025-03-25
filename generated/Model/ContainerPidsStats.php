<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use ArrayObject;
use function array_key_exists;

class ContainerPidsStats extends ArrayObject
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
     * Current is the number of PIDs in the cgroup.
     *
     * @var int|null
     */
    protected $current;
    /**
     * Limit is the hard limit on the number of pids in the cgroup.
     * A "Limit" of 0 means that there is no limit.
     *
     * @var int|null
     */
    protected $limit;

    /**
     * Current is the number of PIDs in the cgroup.
     *
     * @return int|null
     */
    public function getCurrent(): ?int
    {
        return $this->current;
    }

    /**
     * Current is the number of PIDs in the cgroup.
     *
     * @param int|null $current
     *
     * @return self
     */
    public function setCurrent(?int $current): self
    {
        $this->initialized['current'] = true;
        $this->current                = $current;

        return $this;
    }

    /**
     * Limit is the hard limit on the number of pids in the cgroup.
     * A "Limit" of 0 means that there is no limit.
     *
     * @return int|null
     */
    public function getLimit(): ?int
    {
        return $this->limit;
    }

    /**
     * Limit is the hard limit on the number of pids in the cgroup.
     * A "Limit" of 0 means that there is no limit.
     *
     * @param int|null $limit
     *
     * @return self
     */
    public function setLimit(?int $limit): self
    {
        $this->initialized['limit'] = true;
        $this->limit                = $limit;

        return $this;
    }
}
