<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class Health implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Status is one of `none`, `starting`, `healthy` or `unhealthy`.
     *
     * - "none"      Indicates there is no healthcheck
     * - "starting"  Starting indicates that the container is not yet ready
     * - "healthy"   Healthy indicates that the container is running correctly
     * - "unhealthy" Unhealthy indicates that the container has a problem
     *
     * @var string|null
     */
    public ?string $status;
    /**
     * FailingStreak is the number of consecutive failures.
     *
     * @var int|null
     */
    public ?int $failingStreak;
    /**
     * Log contains the last few results (oldest first).
     *
     * @var list<HealthcheckResult>|null
     */
    public ?array $log;

    public function definedProperties(): array
    {
        return ['status' => 'Status', 'failingStreak' => 'FailingStreak', 'log' => 'Log'];
    }
}
