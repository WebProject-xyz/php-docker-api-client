<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ContainerCPUStats implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * All CPU stats aggregated since container inception.
     *
     * @var ContainerCPUUsage|null
     */
    public ?ContainerCPUUsage $cpuUsage;
    /**
     * System Usage.
     *
     * This field is Linux-specific and omitted for Windows containers.
     *
     * @var int|null
     */
    public ?int $systemCpuUsage;
    /**
     * Number of online CPUs.
     *
     * This field is Linux-specific and omitted for Windows containers.
     *
     * @var int|null
     */
    public ?int $onlineCpus;
    /**
     * CPU throttling stats of the container.
     *
     * This type is Linux-specific and omitted for Windows containers.
     *
     * @var ContainerThrottlingData|null
     */
    public ?ContainerThrottlingData $throttlingData;

    public function definedProperties(): array
    {
        return ['cpuUsage' => 'cpu_usage', 'systemCpuUsage' => 'system_cpu_usage', 'onlineCpus' => 'online_cpus', 'throttlingData' => 'throttling_data'];
    }
}
