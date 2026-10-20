<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class PluginConfigInterface implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<string>
     */
    public array $types;
    /**
     * @var string
     */
    public string $socket;
    /**
     * Protocol to use for clients connecting to the plugin.
     *
     * @var string|null
     */
    public ?string $protocolScheme;

    public function definedProperties(): array
    {
        return ['types' => 'Types', 'socket' => 'Socket', 'protocolScheme' => 'ProtocolScheme'];
    }
}
