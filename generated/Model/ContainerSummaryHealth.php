<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use function array_key_exists;

class ContainerSummaryHealth
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
     * the health status of the container.
     *
     * @var string|null
     */
    protected $status;
    /**
     * FailingStreak is the number of consecutive failures.
     *
     * @var int|null
     */
    protected $failingStreak;

    /**
     * the health status of the container.
     *
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * the health status of the container.
     *
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status                = $status;

        return $this;
    }

    /**
     * FailingStreak is the number of consecutive failures.
     *
     * @return int|null
     */
    public function getFailingStreak(): ?int
    {
        return $this->failingStreak;
    }

    /**
     * FailingStreak is the number of consecutive failures.
     *
     * @param int|null $failingStreak
     *
     * @return self
     */
    public function setFailingStreak(?int $failingStreak): self
    {
        $this->initialized['failingStreak'] = true;
        $this->failingStreak                = $failingStreak;

        return $this;
    }
}
