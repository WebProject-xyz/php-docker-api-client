<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class HealthConfig implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The test to perform. Possible values are:
     *
     * - `[]` inherit healthcheck from image or parent image
     * - `["NONE"]` disable healthcheck
     * - `["CMD", args...]` exec arguments directly
     * - `["CMD-SHELL", command]` run command with system's default shell
     *
     * A non-zero exit code indicates a failed healthcheck:
     * - `0` healthy
     * - `1` unhealthy
     * - `2` reserved (treated as unhealthy)
     * - other values: error running probe
     *
     * @var list<string>|null
     */
    public ?array $test;
    /**
     * The time to wait between checks in nanoseconds. It should be 0 or at
     * least 1000000 (1 ms). 0 means inherit.
     *
     * @var int|null
     */
    public ?int $interval;
    /**
     * The time to wait before considering the check to have hung. It should
     * be 0 or at least 1000000 (1 ms). 0 means inherit.
     *
     * If the health check command does not complete within this timeout,
     * the check is considered failed and the health check process is
     * forcibly terminated without a graceful shutdown.
     *
     * @var int|null
     */
    public ?int $timeout;
    /**
     * The number of consecutive failures needed to consider a container as
     * unhealthy. 0 means inherit.
     *
     * @var int|null
     */
    public ?int $retries;
    /**
     * Start period for the container to initialize before starting
     * health-retries countdown in nanoseconds. It should be 0 or at least
     * 1000000 (1 ms). 0 means inherit.
     *
     * @var int|null
     */
    public ?int $startPeriod;
    /**
     * The time to wait between checks in nanoseconds during the start period.
     * It should be 0 or at least 1000000 (1 ms). 0 means inherit.
     *
     * @var int|null
     */
    public ?int $startInterval;

    public function definedProperties(): array
    {
        return ['test' => 'Test', 'interval' => 'Interval', 'timeout' => 'Timeout', 'retries' => 'Retries', 'startPeriod' => 'StartPeriod', 'startInterval' => 'StartInterval'];
    }
}
