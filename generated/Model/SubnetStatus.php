<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use function array_key_exists;

class SubnetStatus
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
     * Number of IP addresses in the subnet that are in use or reserved and are therefore unavailable for allocation, saturating at 2<sup>64</sup> - 1.
     *
     * @var int|null
     */
    protected $iPsInUse;
    /**
     * Number of IP addresses within the network's IPRange for the subnet that are available for allocation, saturating at 2<sup>64</sup> - 1.
     *
     * @var int|null
     */
    protected $dynamicIPsAvailable;

    /**
     * Number of IP addresses in the subnet that are in use or reserved and are therefore unavailable for allocation, saturating at 2<sup>64</sup> - 1.
     *
     * @return int|null
     */
    public function getIPsInUse(): ?int
    {
        return $this->iPsInUse;
    }

    /**
     * Number of IP addresses in the subnet that are in use or reserved and are therefore unavailable for allocation, saturating at 2<sup>64</sup> - 1.
     *
     * @param int|null $iPsInUse
     *
     * @return self
     */
    public function setIPsInUse(?int $iPsInUse): self
    {
        $this->initialized['iPsInUse'] = true;
        $this->iPsInUse                = $iPsInUse;

        return $this;
    }

    /**
     * Number of IP addresses within the network's IPRange for the subnet that are available for allocation, saturating at 2<sup>64</sup> - 1.
     *
     * @return int|null
     */
    public function getDynamicIPsAvailable(): ?int
    {
        return $this->dynamicIPsAvailable;
    }

    /**
     * Number of IP addresses within the network's IPRange for the subnet that are available for allocation, saturating at 2<sup>64</sup> - 1.
     *
     * @param int|null $dynamicIPsAvailable
     *
     * @return self
     */
    public function setDynamicIPsAvailable(?int $dynamicIPsAvailable): self
    {
        $this->initialized['dynamicIPsAvailable'] = true;
        $this->dynamicIPsAvailable                = $dynamicIPsAvailable;

        return $this;
    }
}
