<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use ArrayObject;
use function array_key_exists;

class ContainerThrottlingData extends ArrayObject
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
     * Number of periods with throttling active.
     *
     * @var int
     */
    protected $periods;
    /**
     * Number of periods when the container hit its throttling limit.
     *
     * @var int
     */
    protected $throttledPeriods;
    /**
     * Aggregated time (in nanoseconds) the container was throttled for.
     *
     * @var int
     */
    protected $throttledTime;

    /**
     * Number of periods with throttling active.
     *
     * @return int
     */
    public function getPeriods(): int
    {
        return $this->periods;
    }

    /**
     * Number of periods with throttling active.
     *
     * @param int $periods
     *
     * @return self
     */
    public function setPeriods(int $periods): self
    {
        $this->initialized['periods'] = true;
        $this->periods                = $periods;

        return $this;
    }

    /**
     * Number of periods when the container hit its throttling limit.
     *
     * @return int
     */
    public function getThrottledPeriods(): int
    {
        return $this->throttledPeriods;
    }

    /**
     * Number of periods when the container hit its throttling limit.
     *
     * @param int $throttledPeriods
     *
     * @return self
     */
    public function setThrottledPeriods(int $throttledPeriods): self
    {
        $this->initialized['throttledPeriods'] = true;
        $this->throttledPeriods                = $throttledPeriods;

        return $this;
    }

    /**
     * Aggregated time (in nanoseconds) the container was throttled for.
     *
     * @return int
     */
    public function getThrottledTime(): int
    {
        return $this->throttledTime;
    }

    /**
     * Aggregated time (in nanoseconds) the container was throttled for.
     *
     * @param int $throttledTime
     *
     * @return self
     */
    public function setThrottledTime(int $throttledTime): self
    {
        $this->initialized['throttledTime'] = true;
        $this->throttledTime                = $throttledTime;

        return $this;
    }
}
