<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class Storage implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Information about the storage used for the container's root filesystem.
     *
     * @var RootFSStorage
     */
    public RootFSStorage $rootFS;

    public function definedProperties(): array
    {
        return ['rootFS' => 'RootFS'];
    }
}
