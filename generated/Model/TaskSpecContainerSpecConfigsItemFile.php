<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class TaskSpecContainerSpecConfigsItemFile implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Name represents the final filename in the filesystem.
     *
     * @var string|null
     */
    public ?string $name;
    /**
     * UID represents the file UID.
     *
     * @var string|null
     */
    public ?string $uID;
    /**
     * GID represents the file GID.
     *
     * @var string|null
     */
    public ?string $gID;
    /**
     * Mode represents the FileMode of the file.
     *
     * @var int|null
     */
    public ?int $mode;

    public function definedProperties(): array
    {
        return ['name' => 'Name', 'uID' => 'UID', 'gID' => 'GID', 'mode' => 'Mode'];
    }
}
