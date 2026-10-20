<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ImageDeleteResponseItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The image ID of an image that was untagged.
     *
     * @var string|null
     */
    public ?string $untagged;
    /**
     * The image ID of an image that was deleted.
     *
     * @var string|null
     */
    public ?string $deleted;

    public function definedProperties(): array
    {
        return ['untagged' => 'Untagged', 'deleted' => 'Deleted'];
    }
}
