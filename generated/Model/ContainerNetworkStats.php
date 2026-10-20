<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ContainerNetworkStats implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Bytes received. Windows and Linux.
     *
     * @var int|null
     */
    public ?int $rxBytes;
    /**
     * Packets received. Windows and Linux.
     *
     * @var int|null
     */
    public ?int $rxPackets;
    /**
     * Received errors. Not used on Windows.
     *
     * This field is Linux-specific and always zero for Windows containers.
     *
     * @var int|null
     */
    public ?int $rxErrors;
    /**
     * Incoming packets dropped. Windows and Linux.
     *
     * @var int|null
     */
    public ?int $rxDropped;
    /**
     * Bytes sent. Windows and Linux.
     *
     * @var int|null
     */
    public ?int $txBytes;
    /**
     * Packets sent. Windows and Linux.
     *
     * @var int|null
     */
    public ?int $txPackets;
    /**
     * Sent errors. Not used on Windows.
     *
     * This field is Linux-specific and always zero for Windows containers.
     *
     * @var int|null
     */
    public ?int $txErrors;
    /**
     * Outgoing packets dropped. Windows and Linux.
     *
     * @var int|null
     */
    public ?int $txDropped;
    /**
     * Endpoint ID. Not used on Linux.
     *
     * This field is Windows-specific and omitted for Linux containers.
     *
     * @var string|null
     */
    public ?string $endpointId;
    /**
     * Instance ID. Not used on Linux.
     *
     * This field is Windows-specific and omitted for Linux containers.
     *
     * @var string|null
     */
    public ?string $instanceId;

    public function definedProperties(): array
    {
        return ['rxBytes' => 'rx_bytes', 'rxPackets' => 'rx_packets', 'rxErrors' => 'rx_errors', 'rxDropped' => 'rx_dropped', 'txBytes' => 'tx_bytes', 'txPackets' => 'tx_packets', 'txErrors' => 'tx_errors', 'txDropped' => 'tx_dropped', 'endpointId' => 'endpoint_id', 'instanceId' => 'instance_id'];
    }
}
