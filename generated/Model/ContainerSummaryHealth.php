<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ContainerSummaryHealth implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * the health status of the container.
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

    public function definedProperties(): array
    {
        return ['status' => 'Status', 'failingStreak' => 'FailingStreak'];
    }
}
