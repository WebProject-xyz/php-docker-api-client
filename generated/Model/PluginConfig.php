<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class PluginConfig implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $description;
    /**
     * @var string
     */
    public string $documentation;
    /**
     * The interface between Docker and the plugin.
     *
     * @var PluginConfigInterface
     */
    public PluginConfigInterface $interface;
    /**
     * @var list<string>
     */
    public array $entrypoint;
    /**
     * @var string
     */
    public string $workDir;
    /**
     * @var PluginConfigUser
     */
    public PluginConfigUser $user;
    /**
     * @var PluginConfigNetwork
     */
    public PluginConfigNetwork $network;
    /**
     * @var PluginConfigLinux
     */
    public PluginConfigLinux $linux;
    /**
     * @var string
     */
    public string $propagatedMount;
    /**
     * @var bool
     */
    public bool $ipcHost;
    /**
     * @var bool
     */
    public bool $pidHost;
    /**
     * @var list<PluginMount>
     */
    public array $mounts;
    /**
     * @var list<PluginEnv>
     */
    public array $env;
    /**
     * @var PluginConfigArgs
     */
    public PluginConfigArgs $args;
    /**
     * @var PluginConfigRootfs|null
     */
    public ?PluginConfigRootfs $rootfs;

    public function definedProperties(): array
    {
        return ['description' => 'Description', 'documentation' => 'Documentation', 'interface' => 'Interface', 'entrypoint' => 'Entrypoint', 'workDir' => 'WorkDir', 'user' => 'User', 'network' => 'Network', 'linux' => 'Linux', 'propagatedMount' => 'PropagatedMount', 'ipcHost' => 'IpcHost', 'pidHost' => 'PidHost', 'mounts' => 'Mounts', 'env' => 'Env', 'args' => 'Args', 'rootfs' => 'rootfs'];
    }
}
