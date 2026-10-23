<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class PluginConfigRootfs implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string|null
     */
    public ?string $type;
    /**
     * @var list<string>|null
     */
    public ?array $diffIds;

    public function definedProperties(): array
    {
        return ['type' => 'type', 'diffIds' => 'diff_ids'];
    }
}
