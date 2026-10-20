<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ImagesPrunePostResponse200 implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Images that were deleted.
     *
     * @var list<ImageDeleteResponseItem>
     */
    public array $imagesDeleted;
    /**
     * Disk space reclaimed in bytes.
     *
     * @var int
     */
    public int $spaceReclaimed;

    public function definedProperties(): array
    {
        return ['imagesDeleted' => 'ImagesDeleted', 'spaceReclaimed' => 'SpaceReclaimed'];
    }
}
