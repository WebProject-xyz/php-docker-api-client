<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class NetworkAttachmentConfig implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The target network for attachment. Must be a network name or ID.
     *
     * @var string|null
     */
    public ?string $target;
    /**
     * Discoverable alternate names for the service on this network.
     *
     * @var list<string>|null
     */
    public ?array $aliases;
    /**
     * Driver attachment options for the network target.
     *
     * @var iterable<string, string>|null
     */
    public ?iterable $driverOpts;

    public function definedProperties(): array
    {
        return ['target' => 'Target', 'aliases' => 'Aliases', 'driverOpts' => 'DriverOpts'];
    }
}
