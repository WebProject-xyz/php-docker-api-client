<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class TaskSpecContainerSpecPrivilegesCredentialSpec implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Load credential spec from a Swarm Config with the given ID.
     * The specified config must also be present in the Configs
     * field with the Runtime property set.
     *
     * <p><br /></p>
     *
     *
     * > **Note**: `CredentialSpec.File`, `CredentialSpec.Registry`,
     * > and `CredentialSpec.Config` are mutually exclusive.
     *
     * @var string|null
     */
    public ?string $config;
    /**
     * Load credential spec from this file. The file is read by
     * the daemon, and must be present in the `CredentialSpecs`
     * subdirectory in the docker data directory, which defaults
     * to `C:\ProgramData\Docker\` on Windows.
     *
     * For example, specifying `spec.json` loads
     * `C:\ProgramData\Docker\CredentialSpecs\spec.json`.
     *
     * <p><br /></p>
     *
     * > **Note**: `CredentialSpec.File`, `CredentialSpec.Registry`,
     * > and `CredentialSpec.Config` are mutually exclusive.
     *
     * @var string|null
     */
    public ?string $file;
    /**
     * Load credential spec from this value in the Windows
     * registry. The specified registry value must be located in:
     *
     * `HKLM\SOFTWARE\Microsoft\Windows NT\CurrentVersion\Virtualization\Containers\CredentialSpecs`
     *
     * <p><br /></p>
     *
     *
     * > **Note**: `CredentialSpec.File`, `CredentialSpec.Registry`,
     * > and `CredentialSpec.Config` are mutually exclusive.
     *
     * @var string|null
     */
    public ?string $registry;

    public function definedProperties(): array
    {
        return ['config' => 'Config', 'file' => 'File', 'registry' => 'Registry'];
    }
}
