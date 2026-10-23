<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ContainerBlkioStats implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<ContainerBlkioStatEntry>|null
     */
    public ?array $ioServiceBytesRecursive;
    /**
     * This field is only available when using Linux containers with
     * cgroups v1. It is omitted or `null` when using cgroups v2.
     *
     * @var list<ContainerBlkioStatEntry>|null
     */
    public ?array $ioServicedRecursive;
    /**
     * This field is only available when using Linux containers with
     * cgroups v1. It is omitted or `null` when using cgroups v2.
     *
     * @var list<ContainerBlkioStatEntry>|null
     */
    public ?array $ioQueueRecursive;
    /**
     * This field is only available when using Linux containers with
     * cgroups v1. It is omitted or `null` when using cgroups v2.
     *
     * @var list<ContainerBlkioStatEntry>|null
     */
    public ?array $ioServiceTimeRecursive;
    /**
     * This field is only available when using Linux containers with
     * cgroups v1. It is omitted or `null` when using cgroups v2.
     *
     * @var list<ContainerBlkioStatEntry>|null
     */
    public ?array $ioWaitTimeRecursive;
    /**
     * This field is only available when using Linux containers with
     * cgroups v1. It is omitted or `null` when using cgroups v2.
     *
     * @var list<ContainerBlkioStatEntry>|null
     */
    public ?array $ioMergedRecursive;
    /**
     * This field is only available when using Linux containers with
     * cgroups v1. It is omitted or `null` when using cgroups v2.
     *
     * @var list<ContainerBlkioStatEntry>|null
     */
    public ?array $ioTimeRecursive;
    /**
     * This field is only available when using Linux containers with
     * cgroups v1. It is omitted or `null` when using cgroups v2.
     *
     * @var list<ContainerBlkioStatEntry>|null
     */
    public ?array $sectorsRecursive;

    public function definedProperties(): array
    {
        return ['ioServiceBytesRecursive' => 'io_service_bytes_recursive', 'ioServicedRecursive' => 'io_serviced_recursive', 'ioQueueRecursive' => 'io_queue_recursive', 'ioServiceTimeRecursive' => 'io_service_time_recursive', 'ioWaitTimeRecursive' => 'io_wait_time_recursive', 'ioMergedRecursive' => 'io_merged_recursive', 'ioTimeRecursive' => 'io_time_recursive', 'sectorsRecursive' => 'sectors_recursive'];
    }
}
