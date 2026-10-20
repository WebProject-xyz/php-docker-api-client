<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ContainerThrottlingData implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Number of periods with throttling active.
     *
     * @var int|null
     */
    public ?int $periods;
    /**
     * Number of periods when the container hit its throttling limit.
     *
     * @var int|null
     */
    public ?int $throttledPeriods;
    /**
     * Aggregated time (in nanoseconds) the container was throttled for.
     *
     * @var int|null
     */
    public ?int $throttledTime;

    public function definedProperties(): array
    {
        return ['periods' => 'periods', 'throttledPeriods' => 'throttled_periods', 'throttledTime' => 'throttled_time'];
    }
}
