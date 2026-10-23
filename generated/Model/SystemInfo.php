<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class SystemInfo implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Unique identifier of the daemon.
     *
     * <p><br /></p>
     *
     * > **Note**: The format of the ID itself is not part of the API, and
     * > should not be considered stable.
     *
     * @var string|null
     */
    public ?string $iD;
    /**
     * Total number of containers on the host.
     *
     * @var int|null
     */
    public ?int $containers;
    /**
     * Number of containers with status `"running"`.
     *
     * @var int|null
     */
    public ?int $containersRunning;
    /**
     * Number of containers with status `"paused"`.
     *
     * @var int|null
     */
    public ?int $containersPaused;
    /**
     * Number of containers with status `"stopped"`.
     *
     * @var int|null
     */
    public ?int $containersStopped;
    /**
     * Total number of images on the host.
     *
     * Both _tagged_ and _untagged_ (dangling) images are counted.
     *
     * @var int|null
     */
    public ?int $images;
    /**
     * Name of the storage driver in use.
     *
     * @var string|null
     */
    public ?string $driver;
    /**
     * Information specific to the storage driver, provided as
     * "label" / "value" pairs.
     *
     * This information is provided by the storage driver, and formatted
     * in a way consistent with the output of `docker info` on the command
     * line.
     *
     * <p><br /></p>
     *
     * > **Note**: The information returned in this field, including the
     * > formatting of values and labels, should not be considered stable,
     * > and may change without notice.
     *
     * @var list<list<string>>|null
     */
    public ?array $driverStatus;
    /**
     * Root directory of persistent Docker state.
     *
     * Defaults to `/var/lib/docker` on Linux, and `C:\ProgramData\docker`
     * on Windows.
     *
     * @var string|null
     */
    public ?string $dockerRootDir;
    /**
     * Available plugins per type.
     *
     * <p><br /></p>
     *
     * > **Note**: Only unmanaged (V1) plugins are included in this list.
     * > V1 plugins are "lazily" loaded, and are not returned in this list
     * > if there is no resource using the plugin.
     *
     * @var PluginsInfo
     */
    public PluginsInfo $plugins;
    /**
     * Indicates if the host has memory limit support enabled.
     *
     * @var bool|null
     */
    public ?bool $memoryLimit;
    /**
     * Indicates if the host has memory swap limit support enabled.
     *
     * @var bool|null
     */
    public ?bool $swapLimit;
    /**
     * Indicates if CPU CFS(Completely Fair Scheduler) period is supported by
     * the host.
     *
     * @var bool|null
     */
    public ?bool $cpuCfsPeriod;
    /**
     * Indicates if CPU CFS(Completely Fair Scheduler) quota is supported by
     * the host.
     *
     * @var bool|null
     */
    public ?bool $cpuCfsQuota;
    /**
     * Indicates if CPU Shares limiting is supported by the host.
     *
     * @var bool|null
     */
    public ?bool $cPUShares;
    /**
     * Indicates if CPUsets (cpuset.cpus, cpuset.mems) are supported by the host.
     *
     * See [cpuset(7)](https://www.kernel.org/doc/Documentation/cgroup-v1/cpusets.txt)
     *
     * @var bool|null
     */
    public ?bool $cPUSet;
    /**
     * Indicates if the host kernel has PID limit support enabled.
     *
     * @var bool|null
     */
    public ?bool $pidsLimit;
    /**
     * Indicates if OOM killer disable is supported on the host.
     *
     * @var bool|null
     */
    public ?bool $oomKillDisable;
    /**
     * Indicates IPv4 forwarding is enabled.
     *
     * @var bool|null
     */
    public ?bool $iPv4Forwarding;
    /**
     * Indicates if the daemon is running in debug-mode / with debug-level
     * logging enabled.
     *
     * @var bool|null
     */
    public ?bool $debug;
    /**
     * The total number of file Descriptors in use by the daemon process.
     *
     * This information is only returned if debug-mode is enabled.
     *
     * @var int|null
     */
    public ?int $nFd;
    /**
     * The  number of goroutines that currently exist.
     *
     * This information is only returned if debug-mode is enabled.
     *
     * @var int|null
     */
    public ?int $nGoroutines;
    /**
     * Current system-time in [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt)
     * format with nano-seconds.
     *
     * @var string|null
     */
    public ?string $systemTime;
    /**
     * The logging driver to use as a default for new containers.
     *
     * @var string|null
     */
    public ?string $loggingDriver;
    /**
     * The driver to use for managing cgroups.
     *
     * @var string|null
     */
    public ?string $cgroupDriver = 'cgroupfs';
    /**
     * The version of the cgroup.
     *
     * @var string|null
     */
    public ?string $cgroupVersion = '1';
    /**
     * Number of event listeners subscribed.
     *
     * @var int|null
     */
    public ?int $nEventsListener;
    /**
     * Kernel version of the host.
     *
     * On Linux, this information obtained from `uname`. On Windows this
     * information is queried from the <kbd>HKEY_LOCAL_MACHINE\\SOFTWARE\\Microsoft\\Windows NT\\CurrentVersion\\</kbd>
     * registry value, for example _"10.0 14393 (14393.1198.amd64fre.rs1_release_sec.170427-1353)"_.
     *
     * @var string|null
     */
    public ?string $kernelVersion;
    /**
     * Name of the host's operating system, for example: "Ubuntu 24.04 LTS"
     * or "Windows Server 2016 Datacenter".
     *
     * @var string|null
     */
    public ?string $operatingSystem;
    /**
     * Version of the host's operating system.
     *
     * <p><br /></p>
     *
     * > **Note**: The information returned in this field, including its
     * > very existence, and the formatting of values, should not be considered
     * > stable, and may change without notice.
     *
     * @var string|null
     */
    public ?string $oSVersion;
    /**
     * Generic type of the operating system of the host, as returned by the
     * Go runtime (`GOOS`).
     *
     * Currently returned values are "linux" and "windows". A full list of
     * possible values can be found in the [Go documentation](https://go.dev/doc/install/source#environment).
     *
     * @var string|null
     */
    public ?string $oSType;
    /**
     * Hardware architecture of the host, as returned by the operating system.
     * This is equivalent to the output of `uname -m` on Linux.
     *
     * Unlike `Arch` (from `/version`), this reports the machine's native
     * architecture, which can differ from the Go runtime architecture when
     * running a binary compiled for a different architecture (for example,
     * a 32-bit binary running on 64-bit hardware).
     *
     * @var string|null
     */
    public ?string $architecture;
    /**
     * The number of logical CPUs usable by the daemon.
     *
     * The number of available CPUs is checked by querying the operating
     * system when the daemon starts. Changes to operating system CPU
     * allocation after the daemon is started are not reflected.
     *
     * @var int|null
     */
    public ?int $nCPU;
    /**
     * Total amount of physical memory available on the host, in bytes.
     *
     * @var int|null
     */
    public ?int $memTotal;
    /**
     * Address / URL of the index server that is used for image search,
     * and as a default for user authentication for Docker Hub and Docker Cloud.
     *
     * @var string|null
     */
    public ?string $indexServerAddress = 'https://index.docker.io/v1/';
    /**
     * RegistryServiceConfig stores daemon registry services configuration.
     *
     * @var RegistryServiceConfig|null
     */
    public ?RegistryServiceConfig $registryConfig;
    /**
     * User-defined resources can be either Integer resources (e.g, `SSD=3`) or
     * String resources (e.g, `GPU=UUID1`).
     *
     * @var list<GenericResourcesItem>
     */
    public array $genericResources;
    /**
     * HTTP-proxy configured for the daemon. This value is obtained from the
     * [`HTTP_PROXY`](https://www.gnu.org/software/wget/manual/html_node/Proxies.html) environment variable.
     * Credentials ([user info component](https://tools.ietf.org/html/rfc3986#section-3.2.1)) in the proxy URL
     * are masked in the API response.
     *
     * Containers do not automatically inherit this configuration.
     *
     * @var string|null
     */
    public ?string $httpProxy;
    /**
     * HTTPS-proxy configured for the daemon. This value is obtained from the
     * [`HTTPS_PROXY`](https://www.gnu.org/software/wget/manual/html_node/Proxies.html) environment variable.
     * Credentials ([user info component](https://tools.ietf.org/html/rfc3986#section-3.2.1)) in the proxy URL
     * are masked in the API response.
     *
     * Containers do not automatically inherit this configuration.
     *
     * @var string|null
     */
    public ?string $httpsProxy;
    /**
     * Comma-separated list of domain extensions for which no proxy should be
     * used. This value is obtained from the [`NO_PROXY`](https://www.gnu.org/software/wget/manual/html_node/Proxies.html)
     * environment variable.
     *
     * Containers do not automatically inherit this configuration.
     *
     * @var string|null
     */
    public ?string $noProxy;
    /**
     * Hostname of the host.
     *
     * @var string|null
     */
    public ?string $name;
    /**
     * User-defined labels (key/value metadata) as set on the daemon.
     *
     * <p><br /></p>
     *
     * > **Note**: When part of a Swarm, nodes can both have _daemon_ labels,
     * > set through the daemon configuration, and _node_ labels, set from a
     * > manager node in the Swarm. Node labels are not included in this
     * > field. Node labels can be retrieved using the `/nodes/(id)` endpoint
     * > on a manager node in the Swarm.
     *
     * @var list<string>|null
     */
    public ?array $labels;
    /**
     * Indicates if experimental features are enabled on the daemon.
     *
     * @var bool|null
     */
    public ?bool $experimentalBuild;
    /**
     * Version string of the daemon.
     *
     * @var string|null
     */
    public ?string $serverVersion;
    /**
     * List of [OCI compliant](https://github.com/opencontainers/runtime-spec)
     * runtimes configured on the daemon. Keys hold the "name" used to
     * reference the runtime.
     *
     * The Docker daemon relies on an OCI compliant runtime (invoked via the
     * `containerd` daemon) as its interface to the Linux kernel namespaces,
     * cgroups, and SELinux.
     *
     * The default runtime is `runc`, and automatically configured. Additional
     * runtimes can be configured by the user and will be listed here.
     *
     * @var iterable<string, Runtime>
     */
    public iterable $runtimes;
    /**
     * Name of the default OCI runtime that is used when starting containers.
     *
     * The default can be overridden per-container at create time.
     *
     * @var string|null
     */
    public ?string $defaultRuntime = 'runc';
    /**
     * Represents generic information about swarm.
     *
     * @var SwarmInfo
     */
    public SwarmInfo $swarm;
    /**
     * Indicates if live restore is enabled.
     *
     * If enabled, containers are kept running when the daemon is shutdown
     * or upon daemon start if running containers are detected.
     *
     * @var bool|null
     */
    public ?bool $liveRestoreEnabled = false;
    /**
     * Represents the isolation technology to use as a default for containers.
     * The supported values are platform-specific.
     *
     * If no isolation value is specified on daemon start, on Windows client,
     * the default is `hyperv`, and on Windows server, the default is `process`.
     *
     * This option is currently not used on other platforms.
     *
     * @var string|null
     */
    public ?string $isolation = 'default';
    /**
     * Name and, optional, path of the `docker-init` binary.
     *
     * If the path is omitted, the daemon searches the host's `$PATH` for the
     * binary and uses the first result.
     *
     * @var string|null
     */
    public ?string $initBinary;
    /**
     * Commit holds the Git-commit (SHA1) that a binary was built from, as
     * reported in the version-string of external tools, such as `containerd`,
     * or `runC`.
     *
     * @var Commit
     */
    public Commit $containerdCommit;
    /**
     * Commit holds the Git-commit (SHA1) that a binary was built from, as
     * reported in the version-string of external tools, such as `containerd`,
     * or `runC`.
     *
     * @var Commit
     */
    public Commit $runcCommit;
    /**
     * Commit holds the Git-commit (SHA1) that a binary was built from, as
     * reported in the version-string of external tools, such as `containerd`,
     * or `runC`.
     *
     * @var Commit
     */
    public Commit $initCommit;
    /**
     * List of security features that are enabled on the daemon, such as
     * apparmor, seccomp, SELinux, user-namespaces (userns), rootless and
     * no-new-privileges.
     *
     * Additional configuration options for each security feature may
     * be present, and are included as a comma-separated list of key/value
     * pairs.
     *
     * @var list<string>|null
     */
    public ?array $securityOptions;
    /**
     * Reports a summary of the product license on the daemon.
     *
     * If a commercial license has been applied to the daemon, information
     * such as number of nodes, and expiration are included.
     *
     * @var string|null
     */
    public ?string $productLicense;
    /**
     * List of custom default address pools for local networks, which can be
     * specified in the daemon.json file or dockerd option.
     *
     * Example: a Base "10.10.0.0/16" with Size 24 will define the set of 256
     * 10.10.[0-255].0/24 address pools.
     *
     * @var list<SystemInfoDefaultAddressPoolsItem>|null
     */
    public ?array $defaultAddressPools;
    /**
     * Information about the daemon's firewalling configuration.
     *
     * This field is currently only used on Linux, and omitted on other platforms.
     *
     * @var FirewallInfo|null
     */
    public ?FirewallInfo $firewallBackend;
    /**
     * List of devices discovered by device drivers.
     *
     * Each device includes information about its source driver, kind, name,
     * and additional driver-specific attributes.
     *
     * @var list<DeviceInfo>|null
     */
    public ?array $discoveredDevices;
    /**
     * Information about the Node Resource Interface (NRI).
     *
     * This field is only present if NRI is enabled.
     *
     * @var NRIInfo|null
     */
    public ?NRIInfo $nRI;
    /**
     * List of warnings / informational messages about missing features, or
     * issues related to the daemon configuration.
     *
     * These messages can be printed by the client as information to the user.
     *
     * @var list<string>|null
     */
    public ?array $warnings;
    /**
     * List of directories where (Container Device Interface) CDI
     * specifications are located.
     *
     * These specifications define vendor-specific modifications to an OCI
     * runtime specification for a container being created.
     *
     * An empty list indicates that CDI device injection is disabled.
     *
     * Note that since using CDI device injection requires the daemon to have
     * experimental enabled. For non-experimental daemons an empty list will
     * always be returned.
     *
     * @var list<string>|null
     */
    public ?array $cDISpecDirs;
    /**
     * Information for connecting to the containerd instance that is used by the daemon.
     * This is included for debugging purposes only.
     *
     * @var ContainerdInfo|null
     */
    public ?ContainerdInfo $containerd;

    public function definedProperties(): array
    {
        return ['iD' => 'ID', 'containers' => 'Containers', 'containersRunning' => 'ContainersRunning', 'containersPaused' => 'ContainersPaused', 'containersStopped' => 'ContainersStopped', 'images' => 'Images', 'driver' => 'Driver', 'driverStatus' => 'DriverStatus', 'dockerRootDir' => 'DockerRootDir', 'plugins' => 'Plugins', 'memoryLimit' => 'MemoryLimit', 'swapLimit' => 'SwapLimit', 'cpuCfsPeriod' => 'CpuCfsPeriod', 'cpuCfsQuota' => 'CpuCfsQuota', 'cPUShares' => 'CPUShares', 'cPUSet' => 'CPUSet', 'pidsLimit' => 'PidsLimit', 'oomKillDisable' => 'OomKillDisable', 'iPv4Forwarding' => 'IPv4Forwarding', 'debug' => 'Debug', 'nFd' => 'NFd', 'nGoroutines' => 'NGoroutines', 'systemTime' => 'SystemTime', 'loggingDriver' => 'LoggingDriver', 'cgroupDriver' => 'CgroupDriver', 'cgroupVersion' => 'CgroupVersion', 'nEventsListener' => 'NEventsListener', 'kernelVersion' => 'KernelVersion', 'operatingSystem' => 'OperatingSystem', 'oSVersion' => 'OSVersion', 'oSType' => 'OSType', 'architecture' => 'Architecture', 'nCPU' => 'NCPU', 'memTotal' => 'MemTotal', 'indexServerAddress' => 'IndexServerAddress', 'registryConfig' => 'RegistryConfig', 'genericResources' => 'GenericResources', 'httpProxy' => 'HttpProxy', 'httpsProxy' => 'HttpsProxy', 'noProxy' => 'NoProxy', 'name' => 'Name', 'labels' => 'Labels', 'experimentalBuild' => 'ExperimentalBuild', 'serverVersion' => 'ServerVersion', 'runtimes' => 'Runtimes', 'defaultRuntime' => 'DefaultRuntime', 'swarm' => 'Swarm', 'liveRestoreEnabled' => 'LiveRestoreEnabled', 'isolation' => 'Isolation', 'initBinary' => 'InitBinary', 'containerdCommit' => 'ContainerdCommit', 'runcCommit' => 'RuncCommit', 'initCommit' => 'InitCommit', 'securityOptions' => 'SecurityOptions', 'productLicense' => 'ProductLicense', 'defaultAddressPools' => 'DefaultAddressPools', 'firewallBackend' => 'FirewallBackend', 'discoveredDevices' => 'DiscoveredDevices', 'nRI' => 'NRI', 'warnings' => 'Warnings', 'cDISpecDirs' => 'CDISpecDirs', 'containerd' => 'Containerd'];
    }
}
