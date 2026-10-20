<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class SwarmSpecOrchestration implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The number of historic tasks to keep per instance or node. If
     * negative, never remove completed or failed tasks.
     *
     * @var int|null
     */
    public ?int $taskHistoryRetentionLimit;

    public function definedProperties(): array
    {
        return ['taskHistoryRetentionLimit' => 'TaskHistoryRetentionLimit'];
    }
}
