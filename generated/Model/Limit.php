<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class Limit implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var int|null
     */
    public ?int $nanoCPUs;
    /**
     * @var int|null
     */
    public ?int $memoryBytes;
    /**
     * Limits the maximum number of PIDs in the container. Set `0` for unlimited.
     *
     * @var int|null
     */
    public ?int $pids = 0;

    public function definedProperties(): array
    {
        return ['nanoCPUs' => 'NanoCPUs', 'memoryBytes' => 'MemoryBytes', 'pids' => 'Pids'];
    }
}
