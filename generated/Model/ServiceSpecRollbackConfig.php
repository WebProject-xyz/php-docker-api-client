<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ServiceSpecRollbackConfig implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Maximum number of tasks to be rolled back in one iteration (0 means
     * unlimited parallelism).
     *
     * @var int|null
     */
    public ?int $parallelism;
    /**
     * Amount of time between rollback iterations, in nanoseconds.
     *
     * @var int|null
     */
    public ?int $delay;
    /**
     * Action to take if an rolled back task fails to run, or stops
     * running during the rollback.
     *
     * @var string|null
     */
    public ?string $failureAction;
    /**
     * Amount of time to monitor each rolled back task for failures, in
     * nanoseconds.
     *
     * @var int|null
     */
    public ?int $monitor;
    /**
     * The fraction of tasks that may fail during a rollback before the
     * failure action is invoked, specified as a floating point number
     * between 0 and 1.
     *
     * @var float|null
     */
    public ?float $maxFailureRatio = 0.0;
    /**
     * The order of operations when rolling back a task. Either the old
     * task is shut down before the new task is started, or the new task
     * is started before the old task is shut down.
     *
     * @var string|null
     */
    public ?string $order;

    public function definedProperties(): array
    {
        return ['parallelism' => 'Parallelism', 'delay' => 'Delay', 'failureAction' => 'FailureAction', 'monitor' => 'Monitor', 'maxFailureRatio' => 'MaxFailureRatio', 'order' => 'Order'];
    }
}
