<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use function array_key_exists;

class ContainerNetworkStats
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
     * Bytes received. Windows and Linux.
     *
     * @var int|null
     */
    protected $rxBytes;
    /**
     * Packets received. Windows and Linux.
     *
     * @var int|null
     */
    protected $rxPackets;
    /**
     * Received errors. Not used on Windows.
     *
     * This field is Linux-specific and always zero for Windows containers.
     *
     * @var int|null
     */
    protected $rxErrors;
    /**
     * Incoming packets dropped. Windows and Linux.
     *
     * @var int|null
     */
    protected $rxDropped;
    /**
     * Bytes sent. Windows and Linux.
     *
     * @var int|null
     */
    protected $txBytes;
    /**
     * Packets sent. Windows and Linux.
     *
     * @var int|null
     */
    protected $txPackets;
    /**
     * Sent errors. Not used on Windows.
     *
     * This field is Linux-specific and always zero for Windows containers.
     *
     * @var int|null
     */
    protected $txErrors;
    /**
     * Outgoing packets dropped. Windows and Linux.
     *
     * @var int|null
     */
    protected $txDropped;
    /**
     * Endpoint ID. Not used on Linux.
     *
     * This field is Windows-specific and omitted for Linux containers.
     *
     * @var string|null
     */
    protected $endpointId;
    /**
     * Instance ID. Not used on Linux.
     *
     * This field is Windows-specific and omitted for Linux containers.
     *
     * @var string|null
     */
    protected $instanceId;

    /**
     * Bytes received. Windows and Linux.
     *
     * @return int|null
     */
    public function getRxBytes(): ?int
    {
        return $this->rxBytes;
    }

    /**
     * Bytes received. Windows and Linux.
     *
     * @param int|null $rxBytes
     *
     * @return self
     */
    public function setRxBytes(?int $rxBytes): self
    {
        $this->initialized['rxBytes'] = true;
        $this->rxBytes                = $rxBytes;

        return $this;
    }

    /**
     * Packets received. Windows and Linux.
     *
     * @return int|null
     */
    public function getRxPackets(): ?int
    {
        return $this->rxPackets;
    }

    /**
     * Packets received. Windows and Linux.
     *
     * @param int|null $rxPackets
     *
     * @return self
     */
    public function setRxPackets(?int $rxPackets): self
    {
        $this->initialized['rxPackets'] = true;
        $this->rxPackets                = $rxPackets;

        return $this;
    }

    /**
     * Received errors. Not used on Windows.
     *
     * This field is Linux-specific and always zero for Windows containers.
     *
     * @return int|null
     */
    public function getRxErrors(): ?int
    {
        return $this->rxErrors;
    }

    /**
     * Received errors. Not used on Windows.
     *
     * This field is Linux-specific and always zero for Windows containers.
     *
     * @param int|null $rxErrors
     *
     * @return self
     */
    public function setRxErrors(?int $rxErrors): self
    {
        $this->initialized['rxErrors'] = true;
        $this->rxErrors                = $rxErrors;

        return $this;
    }

    /**
     * Incoming packets dropped. Windows and Linux.
     *
     * @return int|null
     */
    public function getRxDropped(): ?int
    {
        return $this->rxDropped;
    }

    /**
     * Incoming packets dropped. Windows and Linux.
     *
     * @param int|null $rxDropped
     *
     * @return self
     */
    public function setRxDropped(?int $rxDropped): self
    {
        $this->initialized['rxDropped'] = true;
        $this->rxDropped                = $rxDropped;

        return $this;
    }

    /**
     * Bytes sent. Windows and Linux.
     *
     * @return int|null
     */
    public function getTxBytes(): ?int
    {
        return $this->txBytes;
    }

    /**
     * Bytes sent. Windows and Linux.
     *
     * @param int|null $txBytes
     *
     * @return self
     */
    public function setTxBytes(?int $txBytes): self
    {
        $this->initialized['txBytes'] = true;
        $this->txBytes                = $txBytes;

        return $this;
    }

    /**
     * Packets sent. Windows and Linux.
     *
     * @return int|null
     */
    public function getTxPackets(): ?int
    {
        return $this->txPackets;
    }

    /**
     * Packets sent. Windows and Linux.
     *
     * @param int|null $txPackets
     *
     * @return self
     */
    public function setTxPackets(?int $txPackets): self
    {
        $this->initialized['txPackets'] = true;
        $this->txPackets                = $txPackets;

        return $this;
    }

    /**
     * Sent errors. Not used on Windows.
     *
     * This field is Linux-specific and always zero for Windows containers.
     *
     * @return int|null
     */
    public function getTxErrors(): ?int
    {
        return $this->txErrors;
    }

    /**
     * Sent errors. Not used on Windows.
     *
     * This field is Linux-specific and always zero for Windows containers.
     *
     * @param int|null $txErrors
     *
     * @return self
     */
    public function setTxErrors(?int $txErrors): self
    {
        $this->initialized['txErrors'] = true;
        $this->txErrors                = $txErrors;

        return $this;
    }

    /**
     * Outgoing packets dropped. Windows and Linux.
     *
     * @return int|null
     */
    public function getTxDropped(): ?int
    {
        return $this->txDropped;
    }

    /**
     * Outgoing packets dropped. Windows and Linux.
     *
     * @param int|null $txDropped
     *
     * @return self
     */
    public function setTxDropped(?int $txDropped): self
    {
        $this->initialized['txDropped'] = true;
        $this->txDropped                = $txDropped;

        return $this;
    }

    /**
     * Endpoint ID. Not used on Linux.
     *
     * This field is Windows-specific and omitted for Linux containers.
     *
     * @return string|null
     */
    public function getEndpointId(): ?string
    {
        return $this->endpointId;
    }

    /**
     * Endpoint ID. Not used on Linux.
     *
     * This field is Windows-specific and omitted for Linux containers.
     *
     * @param string|null $endpointId
     *
     * @return self
     */
    public function setEndpointId(?string $endpointId): self
    {
        $this->initialized['endpointId'] = true;
        $this->endpointId                = $endpointId;

        return $this;
    }

    /**
     * Instance ID. Not used on Linux.
     *
     * This field is Windows-specific and omitted for Linux containers.
     *
     * @return string|null
     */
    public function getInstanceId(): ?string
    {
        return $this->instanceId;
    }

    /**
     * Instance ID. Not used on Linux.
     *
     * This field is Windows-specific and omitted for Linux containers.
     *
     * @param string|null $instanceId
     *
     * @return self
     */
    public function setInstanceId(?string $instanceId): self
    {
        $this->initialized['instanceId'] = true;
        $this->instanceId                = $instanceId;

        return $this;
    }
}
