<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class TaskSpecContainerSpec implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The image name to use for the container.
     *
     * @var string|null
     */
    public ?string $image;
    /**
     * User-defined key/value data.
     *
     * @var iterable<string, string>|null
     */
    public ?iterable $labels;
    /**
     * The command to be run in the image.
     *
     * @var list<string>|null
     */
    public ?array $command;
    /**
     * Arguments to the command.
     *
     * @var list<string>|null
     */
    public ?array $args;
    /**
     * The hostname to use for the container, as a valid
     * [RFC 1123](https://tools.ietf.org/html/rfc1123) hostname.
     *
     * @var string|null
     */
    public ?string $hostname;
    /**
     * A list of environment variables in the form `VAR=value`.
     *
     * @var list<string>|null
     */
    public ?array $env;
    /**
     * The working directory for commands to run in.
     *
     * @var string|null
     */
    public ?string $dir;
    /**
     * The user inside the container.
     *
     * @var string|null
     */
    public ?string $user;
    /**
     * A list of additional groups that the container process will run as.
     *
     * @var list<string>|null
     */
    public ?array $groups;
    /**
     * Security options for the container.
     *
     * @var TaskSpecContainerSpecPrivileges|null
     */
    public ?TaskSpecContainerSpecPrivileges $privileges;
    /**
     * Whether a pseudo-TTY should be allocated.
     *
     * @var bool|null
     */
    public ?bool $tTY;
    /**
     * Open `stdin`.
     *
     * @var bool|null
     */
    public ?bool $openStdin;
    /**
     * Mount the container's root filesystem as read only.
     *
     * @var bool|null
     */
    public ?bool $readOnly;
    /**
     * Specification for mounts to be added to containers created as part
     * of the service.
     *
     * @var list<Mount>|null
     */
    public ?array $mounts;
    /**
     * Signal to stop the container.
     *
     * @var string|null
     */
    public ?string $stopSignal;
    /**
     * Amount of time to wait for the container to terminate before
     * forcefully killing it.
     *
     * @var int|null
     */
    public ?int $stopGracePeriod;
    /**
     * A test to perform to check that the container is healthy.
     * Healthcheck commands should be side-effect free.
     *
     * @var HealthConfig
     */
    public HealthConfig $healthCheck;
    /**
     * A list of hostname/IP mappings to add to the container's `hosts`
     * file. The format of extra hosts is specified in the
     * [hosts(5)](http://man7.org/linux/man-pages/man5/hosts.5.html)
     * man page:
     *
     *     IP_address canonical_hostname [aliases...]
     *
     * @var list<string>|null
     */
    public ?array $hosts;
    /**
     * Specification for DNS related configurations in resolver configuration
     * file (`resolv.conf`).
     *
     * @var TaskSpecContainerSpecDNSConfig|null
     */
    public ?TaskSpecContainerSpecDNSConfig $dNSConfig;
    /**
     * Secrets contains references to zero or more secrets that will be
     * exposed to the service.
     *
     * @var list<TaskSpecContainerSpecSecretsItem>|null
     */
    public ?array $secrets;
    /**
     * An integer value containing the score given to the container in
     * order to tune OOM killer preferences.
     *
     * @var int|null
     */
    public ?int $oomScoreAdj;
    /**
     * Configs contains references to zero or more configs that will be
     * exposed to the service.
     *
     * @var list<TaskSpecContainerSpecConfigsItem>|null
     */
    public ?array $configs;
    /**
     * Isolation technology of the containers running the service.
     * (Windows only).
     *
     * @var string|null
     */
    public ?string $isolation;
    /**
     * Run an init inside the container that forwards signals and reaps
     * processes. This field is omitted if empty, and the default (as
     * configured on the daemon) is used.
     *
     * @var bool|null
     */
    public ?bool $init;
    /**
     * Set kernel namedspaced parameters (sysctls) in the container.
     * The Sysctls option on services accepts the same sysctls as the
     * are supported on containers. Note that while the same sysctls are
     * supported, no guarantees or checks are made about their
     * suitability for a clustered environment, and it's up to the user
     * to determine whether a given sysctl will work properly in a
     * Service.
     *
     * @var iterable<string, string>|null
     */
    public ?iterable $sysctls;
    /**
     * A list of kernel capabilities to add to the default set
     * for the container.
     *
     * @var list<string>|null
     */
    public ?array $capabilityAdd;
    /**
     * A list of kernel capabilities to drop from the default set
     * for the container.
     *
     * @var list<string>|null
     */
    public ?array $capabilityDrop;
    /**
     * A list of resource limits to set in the container. For example: `{"Name": "nofile", "Soft": 1024, "Hard": 2048}`".
     *
     * @var list<TaskSpecContainerSpecUlimitsItem>|null
     */
    public ?array $ulimits;

    public function definedProperties(): array
    {
        return ['image' => 'Image', 'labels' => 'Labels', 'command' => 'Command', 'args' => 'Args', 'hostname' => 'Hostname', 'env' => 'Env', 'dir' => 'Dir', 'user' => 'User', 'groups' => 'Groups', 'privileges' => 'Privileges', 'tTY' => 'TTY', 'openStdin' => 'OpenStdin', 'readOnly' => 'ReadOnly', 'mounts' => 'Mounts', 'stopSignal' => 'StopSignal', 'stopGracePeriod' => 'StopGracePeriod', 'healthCheck' => 'HealthCheck', 'hosts' => 'Hosts', 'dNSConfig' => 'DNSConfig', 'secrets' => 'Secrets', 'oomScoreAdj' => 'OomScoreAdj', 'configs' => 'Configs', 'isolation' => 'Isolation', 'init' => 'Init', 'sysctls' => 'Sysctls', 'capabilityAdd' => 'CapabilityAdd', 'capabilityDrop' => 'CapabilityDrop', 'ulimits' => 'Ulimits'];
    }
}
