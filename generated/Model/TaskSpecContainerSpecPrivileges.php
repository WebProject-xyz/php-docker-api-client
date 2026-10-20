<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class TaskSpecContainerSpecPrivileges implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * CredentialSpec for managed service account (Windows only).
     *
     * @var TaskSpecContainerSpecPrivilegesCredentialSpec|null
     */
    public ?TaskSpecContainerSpecPrivilegesCredentialSpec $credentialSpec;
    /**
     * SELinux labels of the container.
     *
     * @var TaskSpecContainerSpecPrivilegesSELinuxContext|null
     */
    public ?TaskSpecContainerSpecPrivilegesSELinuxContext $sELinuxContext;
    /**
     * Options for configuring seccomp on the container.
     *
     * @var TaskSpecContainerSpecPrivilegesSeccomp|null
     */
    public ?TaskSpecContainerSpecPrivilegesSeccomp $seccomp;
    /**
     * Options for configuring AppArmor on the container.
     *
     * @var TaskSpecContainerSpecPrivilegesAppArmor|null
     */
    public ?TaskSpecContainerSpecPrivilegesAppArmor $appArmor;
    /**
     * Configuration of the no_new_privs bit in the container.
     *
     * @var bool|null
     */
    public ?bool $noNewPrivileges;

    public function definedProperties(): array
    {
        return ['credentialSpec' => 'CredentialSpec', 'sELinuxContext' => 'SELinuxContext', 'seccomp' => 'Seccomp', 'appArmor' => 'AppArmor', 'noNewPrivileges' => 'NoNewPrivileges'];
    }
}
