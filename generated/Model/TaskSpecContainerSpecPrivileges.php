<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use ArrayObject;
use function array_key_exists;

class TaskSpecContainerSpecPrivileges extends ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * CredentialSpec for managed service account (Windows only).
     *
     * @var TaskSpecContainerSpecPrivilegesCredentialSpec
     */
    protected $credentialSpec;
    /**
     * SELinux labels of the container.
     *
     * @var TaskSpecContainerSpecPrivilegesSELinuxContext
     */
    protected $sELinuxContext;
    /**
     * Options for configuring seccomp on the container.
     *
     * @var TaskSpecContainerSpecPrivilegesSeccomp
     */
    protected $seccomp;
    /**
     * Options for configuring AppArmor on the container.
     *
     * @var TaskSpecContainerSpecPrivilegesAppArmor
     */
    protected $appArmor;
    /**
     * Configuration of the no_new_privs bit in the container.
     *
     * @var bool
     */
    protected $noNewPrivileges;

    /**
     * CredentialSpec for managed service account (Windows only).
     *
     * @return TaskSpecContainerSpecPrivilegesCredentialSpec
     */
    public function getCredentialSpec(): TaskSpecContainerSpecPrivilegesCredentialSpec
    {
        return $this->credentialSpec;
    }

    /**
     * CredentialSpec for managed service account (Windows only).
     *
     * @param TaskSpecContainerSpecPrivilegesCredentialSpec $credentialSpec
     *
     * @return self
     */
    public function setCredentialSpec(TaskSpecContainerSpecPrivilegesCredentialSpec $credentialSpec): self
    {
        $this->initialized['credentialSpec'] = true;
        $this->credentialSpec                = $credentialSpec;

        return $this;
    }

    /**
     * SELinux labels of the container.
     *
     * @return TaskSpecContainerSpecPrivilegesSELinuxContext
     */
    public function getSELinuxContext(): TaskSpecContainerSpecPrivilegesSELinuxContext
    {
        return $this->sELinuxContext;
    }

    /**
     * SELinux labels of the container.
     *
     * @param TaskSpecContainerSpecPrivilegesSELinuxContext $sELinuxContext
     *
     * @return self
     */
    public function setSELinuxContext(TaskSpecContainerSpecPrivilegesSELinuxContext $sELinuxContext): self
    {
        $this->initialized['sELinuxContext'] = true;
        $this->sELinuxContext                = $sELinuxContext;

        return $this;
    }

    /**
     * Options for configuring seccomp on the container.
     *
     * @return TaskSpecContainerSpecPrivilegesSeccomp
     */
    public function getSeccomp(): TaskSpecContainerSpecPrivilegesSeccomp
    {
        return $this->seccomp;
    }

    /**
     * Options for configuring seccomp on the container.
     *
     * @param TaskSpecContainerSpecPrivilegesSeccomp $seccomp
     *
     * @return self
     */
    public function setSeccomp(TaskSpecContainerSpecPrivilegesSeccomp $seccomp): self
    {
        $this->initialized['seccomp'] = true;
        $this->seccomp                = $seccomp;

        return $this;
    }

    /**
     * Options for configuring AppArmor on the container.
     *
     * @return TaskSpecContainerSpecPrivilegesAppArmor
     */
    public function getAppArmor(): TaskSpecContainerSpecPrivilegesAppArmor
    {
        return $this->appArmor;
    }

    /**
     * Options for configuring AppArmor on the container.
     *
     * @param TaskSpecContainerSpecPrivilegesAppArmor $appArmor
     *
     * @return self
     */
    public function setAppArmor(TaskSpecContainerSpecPrivilegesAppArmor $appArmor): self
    {
        $this->initialized['appArmor'] = true;
        $this->appArmor                = $appArmor;

        return $this;
    }

    /**
     * Configuration of the no_new_privs bit in the container.
     *
     * @return bool
     */
    public function getNoNewPrivileges(): bool
    {
        return $this->noNewPrivileges;
    }

    /**
     * Configuration of the no_new_privs bit in the container.
     *
     * @param bool $noNewPrivileges
     *
     * @return self
     */
    public function setNoNewPrivileges(bool $noNewPrivileges): self
    {
        $this->initialized['noNewPrivileges'] = true;
        $this->noNewPrivileges                = $noNewPrivileges;

        return $this;
    }
}
