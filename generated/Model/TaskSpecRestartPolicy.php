<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class TaskSpecRestartPolicy implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Condition for restart.
     *
     * @var string|null
     */
    public ?string $condition;
    /**
     * Delay between restart attempts.
     *
     * @var int|null
     */
    public ?int $delay;
    /**
     * Maximum attempts to restart a given container before giving up
     * (default value is 0, which is ignored).
     *
     * @var int|null
     */
    public ?int $maxAttempts = 0;
    /**
     * Windows is the time window used to evaluate the restart policy
     * (default value is 0, which is unbounded).
     *
     * @var int|null
     */
    public ?int $window = 0;

    public function definedProperties(): array
    {
        return ['condition' => 'Condition', 'delay' => 'Delay', 'maxAttempts' => 'MaxAttempts', 'window' => 'Window'];
    }
}
