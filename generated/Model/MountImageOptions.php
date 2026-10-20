<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class MountImageOptions implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Source path inside the image. Must be relative without any back traversals.
     *
     * @var string|null
     */
    public ?string $subpath;

    public function definedProperties(): array
    {
        return ['subpath' => 'Subpath'];
    }
}
