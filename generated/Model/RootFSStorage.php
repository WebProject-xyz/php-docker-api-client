<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class RootFSStorage implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Information about a snapshot backend of the container's root filesystem.
     *
     * @var RootFSStorageSnapshot
     */
    public RootFSStorageSnapshot $snapshot;

    public function definedProperties(): array
    {
        return ['snapshot' => 'Snapshot'];
    }
}
