<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ClusterVolumeSpecAccessModeSecretsItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Key is the name of the key of the key-value pair passed to
     * the plugin.
     *
     * @var string|null
     */
    public ?string $key;
    /**
     * Secret is the swarm Secret object from which to read data.
     * This can be a Secret name or ID. The Secret data is
     * retrieved by swarm and used as the value of the key-value
     * pair passed to the plugin.
     *
     * @var string|null
     */
    public ?string $secret;

    public function definedProperties(): array
    {
        return ['key' => 'Key', 'secret' => 'Secret'];
    }
}
