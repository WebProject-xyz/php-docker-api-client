<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class NodeSpec implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Name for the node.
     *
     * @var string|null
     */
    public ?string $name;
    /**
     * User-defined key/value metadata.
     *
     * @var iterable<string, string>|null
     */
    public ?iterable $labels;
    /**
     * Role of the node.
     *
     * @var string|null
     */
    public ?string $role;
    /**
     * Availability of the node.
     *
     * @var string|null
     */
    public ?string $availability;

    public function definedProperties(): array
    {
        return ['name' => 'Name', 'labels' => 'Labels', 'role' => 'Role', 'availability' => 'Availability'];
    }
}
