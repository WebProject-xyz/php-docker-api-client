<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use ArrayObject;
use function array_key_exists;

class ContainerBlkioStats extends ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var list<ContainerBlkioStatEntry>
     */
    protected $ioServiceBytesRecursive;
    /**
     * This field is only available when using Linux containers with
     * cgroups v1. It is omitted or `null` when using cgroups v2.
     *
     * @var list<ContainerBlkioStatEntry>|null
     */
    protected $ioServicedRecursive;
    /**
     * This field is only available when using Linux containers with
     * cgroups v1. It is omitted or `null` when using cgroups v2.
     *
     * @var list<ContainerBlkioStatEntry>|null
     */
    protected $ioQueueRecursive;
    /**
     * This field is only available when using Linux containers with
     * cgroups v1. It is omitted or `null` when using cgroups v2.
     *
     * @var list<ContainerBlkioStatEntry>|null
     */
    protected $ioServiceTimeRecursive;
    /**
     * This field is only available when using Linux containers with
     * cgroups v1. It is omitted or `null` when using cgroups v2.
     *
     * @var list<ContainerBlkioStatEntry>|null
     */
    protected $ioWaitTimeRecursive;
    /**
     * This field is only available when using Linux containers with
     * cgroups v1. It is omitted or `null` when using cgroups v2.
     *
     * @var list<ContainerBlkioStatEntry>|null
     */
    protected $ioMergedRecursive;
    /**
     * This field is only available when using Linux containers with
     * cgroups v1. It is omitted or `null` when using cgroups v2.
     *
     * @var list<ContainerBlkioStatEntry>|null
     */
    protected $ioTimeRecursive;
    /**
     * This field is only available when using Linux containers with
     * cgroups v1. It is omitted or `null` when using cgroups v2.
     *
     * @var list<ContainerBlkioStatEntry>|null
     */
    protected $sectorsRecursive;

    /**
     * @return list<ContainerBlkioStatEntry>
     */
    public function getIoServiceBytesRecursive(): array
    {
        return $this->ioServiceBytesRecursive;
    }

    /**
     * @param list<ContainerBlkioStatEntry> $ioServiceBytesRecursive
     *
     * @return self
     */
    public function setIoServiceBytesRecursive(array $ioServiceBytesRecursive): self
    {
        $this->initialized['ioServiceBytesRecursive'] = true;
        $this->ioServiceBytesRecursive                = $ioServiceBytesRecursive;

        return $this;
    }

    /**
     * This field is only available when using Linux containers with
     * cgroups v1. It is omitted or `null` when using cgroups v2.
     *
     * @return list<ContainerBlkioStatEntry>|null
     */
    public function getIoServicedRecursive(): ?array
    {
        return $this->ioServicedRecursive;
    }

    /**
     * This field is only available when using Linux containers with
     * cgroups v1. It is omitted or `null` when using cgroups v2.
     *
     * @param list<ContainerBlkioStatEntry>|null $ioServicedRecursive
     *
     * @return self
     */
    public function setIoServicedRecursive(?array $ioServicedRecursive): self
    {
        $this->initialized['ioServicedRecursive'] = true;
        $this->ioServicedRecursive                = $ioServicedRecursive;

        return $this;
    }

    /**
     * This field is only available when using Linux containers with
     * cgroups v1. It is omitted or `null` when using cgroups v2.
     *
     * @return list<ContainerBlkioStatEntry>|null
     */
    public function getIoQueueRecursive(): ?array
    {
        return $this->ioQueueRecursive;
    }

    /**
     * This field is only available when using Linux containers with
     * cgroups v1. It is omitted or `null` when using cgroups v2.
     *
     * @param list<ContainerBlkioStatEntry>|null $ioQueueRecursive
     *
     * @return self
     */
    public function setIoQueueRecursive(?array $ioQueueRecursive): self
    {
        $this->initialized['ioQueueRecursive'] = true;
        $this->ioQueueRecursive                = $ioQueueRecursive;

        return $this;
    }

    /**
     * This field is only available when using Linux containers with
     * cgroups v1. It is omitted or `null` when using cgroups v2.
     *
     * @return list<ContainerBlkioStatEntry>|null
     */
    public function getIoServiceTimeRecursive(): ?array
    {
        return $this->ioServiceTimeRecursive;
    }

    /**
     * This field is only available when using Linux containers with
     * cgroups v1. It is omitted or `null` when using cgroups v2.
     *
     * @param list<ContainerBlkioStatEntry>|null $ioServiceTimeRecursive
     *
     * @return self
     */
    public function setIoServiceTimeRecursive(?array $ioServiceTimeRecursive): self
    {
        $this->initialized['ioServiceTimeRecursive'] = true;
        $this->ioServiceTimeRecursive                = $ioServiceTimeRecursive;

        return $this;
    }

    /**
     * This field is only available when using Linux containers with
     * cgroups v1. It is omitted or `null` when using cgroups v2.
     *
     * @return list<ContainerBlkioStatEntry>|null
     */
    public function getIoWaitTimeRecursive(): ?array
    {
        return $this->ioWaitTimeRecursive;
    }

    /**
     * This field is only available when using Linux containers with
     * cgroups v1. It is omitted or `null` when using cgroups v2.
     *
     * @param list<ContainerBlkioStatEntry>|null $ioWaitTimeRecursive
     *
     * @return self
     */
    public function setIoWaitTimeRecursive(?array $ioWaitTimeRecursive): self
    {
        $this->initialized['ioWaitTimeRecursive'] = true;
        $this->ioWaitTimeRecursive                = $ioWaitTimeRecursive;

        return $this;
    }

    /**
     * This field is only available when using Linux containers with
     * cgroups v1. It is omitted or `null` when using cgroups v2.
     *
     * @return list<ContainerBlkioStatEntry>|null
     */
    public function getIoMergedRecursive(): ?array
    {
        return $this->ioMergedRecursive;
    }

    /**
     * This field is only available when using Linux containers with
     * cgroups v1. It is omitted or `null` when using cgroups v2.
     *
     * @param list<ContainerBlkioStatEntry>|null $ioMergedRecursive
     *
     * @return self
     */
    public function setIoMergedRecursive(?array $ioMergedRecursive): self
    {
        $this->initialized['ioMergedRecursive'] = true;
        $this->ioMergedRecursive                = $ioMergedRecursive;

        return $this;
    }

    /**
     * This field is only available when using Linux containers with
     * cgroups v1. It is omitted or `null` when using cgroups v2.
     *
     * @return list<ContainerBlkioStatEntry>|null
     */
    public function getIoTimeRecursive(): ?array
    {
        return $this->ioTimeRecursive;
    }

    /**
     * This field is only available when using Linux containers with
     * cgroups v1. It is omitted or `null` when using cgroups v2.
     *
     * @param list<ContainerBlkioStatEntry>|null $ioTimeRecursive
     *
     * @return self
     */
    public function setIoTimeRecursive(?array $ioTimeRecursive): self
    {
        $this->initialized['ioTimeRecursive'] = true;
        $this->ioTimeRecursive                = $ioTimeRecursive;

        return $this;
    }

    /**
     * This field is only available when using Linux containers with
     * cgroups v1. It is omitted or `null` when using cgroups v2.
     *
     * @return list<ContainerBlkioStatEntry>|null
     */
    public function getSectorsRecursive(): ?array
    {
        return $this->sectorsRecursive;
    }

    /**
     * This field is only available when using Linux containers with
     * cgroups v1. It is omitted or `null` when using cgroups v2.
     *
     * @param list<ContainerBlkioStatEntry>|null $sectorsRecursive
     *
     * @return self
     */
    public function setSectorsRecursive(?array $sectorsRecursive): self
    {
        $this->initialized['sectorsRecursive'] = true;
        $this->sectorsRecursive                = $sectorsRecursive;

        return $this;
    }
}
