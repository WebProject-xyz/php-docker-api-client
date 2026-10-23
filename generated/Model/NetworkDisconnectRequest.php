<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class NetworkDisconnectRequest implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The ID or name of the container to disconnect from the network.
     *
     * @var string
     */
    public string $container;
    /**
     * Force the container to disconnect from the network.
     *
     * @var bool
     */
    public bool $force = false;

    public function definedProperties(): array
    {
        return ['container' => 'Container', 'force' => 'Force'];
    }
}
