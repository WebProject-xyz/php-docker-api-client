<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class TaskSpecContainerSpecPrivilegesSELinuxContext implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Disable SELinux.
     *
     * @var bool|null
     */
    public ?bool $disable;
    /**
     * SELinux user label.
     *
     * @var string|null
     */
    public ?string $user;
    /**
     * SELinux role label.
     *
     * @var string|null
     */
    public ?string $role;
    /**
     * SELinux type label.
     *
     * @var string|null
     */
    public ?string $type;
    /**
     * SELinux level label.
     *
     * @var string|null
     */
    public ?string $level;

    public function definedProperties(): array
    {
        return ['disable' => 'Disable', 'user' => 'User', 'role' => 'Role', 'type' => 'Type', 'level' => 'Level'];
    }
}
