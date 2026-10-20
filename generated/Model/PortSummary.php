<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class PortSummary implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Host IP address that the container's port is mapped to.
     *
     * @var string|null
     */
    public ?string $iP;
    /**
     * Port on the container.
     *
     * @var int
     */
    public int $privatePort;
    /**
     * Port exposed on the host.
     *
     * @var int|null
     */
    public ?int $publicPort;
    /**
     * @var PortSummaryType
     */
    public PortSummaryType $type;

    public function definedProperties(): array
    {
        return ['iP' => 'IP', 'privatePort' => 'PrivatePort', 'publicPort' => 'PublicPort', 'type' => 'Type'];
    }
}
