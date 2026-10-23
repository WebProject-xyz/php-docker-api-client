<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ContainerPidsStats implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Current is the number of PIDs in the cgroup.
     *
     * @var int|null
     */
    public ?int $current;
    /**
     * Limit is the hard limit on the number of pids in the cgroup.
     * A "Limit" of 0 means that there is no limit.
     *
     * @var int|null
     */
    public ?int $limit;

    public function definedProperties(): array
    {
        return ['current' => 'current', 'limit' => 'limit'];
    }
}
