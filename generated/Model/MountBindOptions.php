<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class MountBindOptions implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A propagation mode with the value `[r]private`, `[r]shared`, or `[r]slave`.
     *
     * @var string|null
     */
    public ?string $propagation;
    /**
     * Disable recursive bind mount.
     *
     * @var bool|null
     */
    public ?bool $nonRecursive = false;
    /**
     * Create mount point on host if missing.
     *
     * @var bool|null
     */
    public ?bool $createMountpoint = false;
    /**
     * Make the mount non-recursively read-only, but still leave the mount recursive
     * (unless NonRecursive is set to `true` in conjunction).
     *
     * Added in v1.44, before that version all read-only mounts were
     * non-recursive by default. To match the previous behaviour this
     * will default to `true` for clients on versions prior to v1.44.
     *
     * @var bool|null
     */
    public ?bool $readOnlyNonRecursive = false;
    /**
     * Raise an error if the mount cannot be made recursively read-only.
     *
     * @var bool|null
     */
    public ?bool $readOnlyForceRecursive = false;

    public function definedProperties(): array
    {
        return ['propagation' => 'Propagation', 'nonRecursive' => 'NonRecursive', 'createMountpoint' => 'CreateMountpoint', 'readOnlyNonRecursive' => 'ReadOnlyNonRecursive', 'readOnlyForceRecursive' => 'ReadOnlyForceRecursive'];
    }
}
