<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ContainerCPUUsage implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Total CPU time consumed in nanoseconds (Linux) or 100's of nanoseconds (Windows).
     *
     * @var int|null
     */
    public ?int $totalUsage;
    /**
     * Total CPU time (in nanoseconds) consumed per core (Linux).
     *
     * This field is Linux-specific when using cgroups v1. It is omitted
     * when using cgroups v2 and Windows containers.
     *
     * @var list<int>|null
     */
    public ?array $percpuUsage;
    /**
     * Time (in nanoseconds) spent by tasks of the cgroup in kernel mode (Linux),
     * or time spent (in 100's of nanoseconds) by all container processes in
     * kernel mode (Windows).
     *
     * Not populated for Windows containers using Hyper-V isolation.
     *
     * @var int|null
     */
    public ?int $usageInKernelmode;
    /**
     * Time (in nanoseconds) spent by tasks of the cgroup in user mode (Linux),
     * or time spent (in 100's of nanoseconds) by all container processes in
     * kernel mode (Windows).
     *
     * Not populated for Windows containers using Hyper-V isolation.
     *
     * @var int|null
     */
    public ?int $usageInUsermode;

    public function definedProperties(): array
    {
        return ['totalUsage' => 'total_usage', 'percpuUsage' => 'percpu_usage', 'usageInKernelmode' => 'usage_in_kernelmode', 'usageInUsermode' => 'usage_in_usermode'];
    }
}
