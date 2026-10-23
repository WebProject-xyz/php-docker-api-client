<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ServiceSpecModeReplicatedJob implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The maximum number of replicas to run simultaneously.
     *
     * @var int|null
     */
    public ?int $maxConcurrent = 1;
    /**
     * The total number of replicas desired to reach the Completed
     * state. If unset, will default to the value of `MaxConcurrent`.
     *
     * @var int|null
     */
    public ?int $totalCompletions;

    public function definedProperties(): array
    {
        return ['maxConcurrent' => 'MaxConcurrent', 'totalCompletions' => 'TotalCompletions'];
    }
}
