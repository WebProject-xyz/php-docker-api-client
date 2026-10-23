<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class PortBinding implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Host IP address that the container's port is mapped to.
     *
     * @var string|null
     */
    public ?string $hostIp;
    /**
     * Host port number that the container's port is mapped to.
     *
     * @var string|null
     */
    public ?string $hostPort;

    public function definedProperties(): array
    {
        return ['hostIp' => 'HostIp', 'hostPort' => 'HostPort'];
    }
}
