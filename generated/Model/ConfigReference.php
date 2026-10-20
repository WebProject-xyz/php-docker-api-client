<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ConfigReference implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The name of the config-only network that provides the network's
     * configuration. The specified network must be an existing config-only
     * network. Only network names are allowed, not network IDs.
     *
     * @var string|null
     */
    public ?string $network;

    public function definedProperties(): array
    {
        return ['network' => 'Network'];
    }
}
