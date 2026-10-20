<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ContainerConfig implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The hostname to use for the container, as a valid RFC 1123 hostname.
     *
     * @var string|null
     */
    public ?string $hostname;
    /**
     * The domain name to use for the container.
     *
     * @var string|null
     */
    public ?string $domainname;
    /**
     * Commands run as this user inside the container. If omitted, commands
     * run as the user specified in the image the container was started from.
     *
     * Can be either user-name or UID, and optional group-name or GID,
     * separated by a colon (`<user-name|UID>[<:group-name|GID>]`).
     *
     * @var string|null
     */
    public ?string $user;
    /**
     * Whether to attach to `stdin`.
     *
     * @var bool|null
     */
    public ?bool $attachStdin = false;
    /**
     * Whether to attach to `stdout`.
     *
     * @var bool|null
     */
    public ?bool $attachStdout = true;
    /**
     * Whether to attach to `stderr`.
     *
     * @var bool|null
     */
    public ?bool $attachStderr = true;
    /**
     * An object mapping ports to an empty object in the form:
     *
     * `{"<port>/<tcp|udp|sctp>": {}}`
     *
     * @var iterable<string, mixed>|null
     */
    public ?iterable $exposedPorts;
    /**
     * Attach standard streams to a TTY, including `stdin` if it is not closed.
     *
     * @var bool|null
     */
    public ?bool $tty = false;
    /**
     * Open `stdin`.
     *
     * @var bool|null
     */
    public ?bool $openStdin = false;
    /**
     * Close `stdin` after one attached client disconnects.
     *
     * @var bool|null
     */
    public ?bool $stdinOnce = false;
    /**
     * A list of environment variables to set inside the container in the
     * form `["VAR=value", ...]`. A variable without `=` is removed from the
     * environment, rather than to have an empty value.
     *
     * @var list<string>|null
     */
    public ?array $env;
    /**
     * Command to run specified as a string or an array of strings.
     *
     * @var list<string>|null
     */
    public ?array $cmd;
    /**
     * A test to perform to check that the container is healthy.
     * Healthcheck commands should be side-effect free.
     *
     * @var HealthConfig
     */
    public HealthConfig $healthcheck;
    /**
     * Command is already escaped (Windows only).
     *
     * @var bool|null
     */
    public ?bool $argsEscaped = false;
    /**
     * The name (or reference) of the image to use when creating the container,
     * or which was used when the container was created.
     *
     * @var string|null
     */
    public ?string $image;
    /**
     * An object mapping mount point paths inside the container to empty
     * objects.
     *
     * @var iterable<string, mixed>|null
     */
    public ?iterable $volumes;
    /**
     * The working directory for commands to run in.
     *
     * @var string|null
     */
    public ?string $workingDir;
    /**
     * The entry point for the container as a string or an array of strings.
     *
     * If the array consists of exactly one empty string (`[""]`) then the
     * entry point is reset to system default (i.e., the entry point used by
     * docker when there is no `ENTRYPOINT` instruction in the `Dockerfile`).
     *
     * @var list<string>|null
     */
    public ?array $entrypoint;
    /**
     * Disable networking for the container.
     *
     * @var bool|null
     */
    public ?bool $networkDisabled;
    /**
     * `ONBUILD` metadata that were defined in the image's `Dockerfile`.
     *
     * @var list<string>|null
     */
    public ?array $onBuild;
    /**
     * User-defined key/value metadata.
     *
     * @var iterable<string, string>|null
     */
    public ?iterable $labels;
    /**
     * Signal to stop a container as a string or unsigned integer.
     *
     * @var string|null
     */
    public ?string $stopSignal;
    /**
     * Timeout to stop a container in seconds.
     *
     * @var int|null
     */
    public ?int $stopTimeout = 10;
    /**
     * Shell for when `RUN`, `CMD`, and `ENTRYPOINT` uses a shell.
     *
     * @var list<string>|null
     */
    public ?array $shell;

    public function definedProperties(): array
    {
        return ['hostname' => 'Hostname', 'domainname' => 'Domainname', 'user' => 'User', 'attachStdin' => 'AttachStdin', 'attachStdout' => 'AttachStdout', 'attachStderr' => 'AttachStderr', 'exposedPorts' => 'ExposedPorts', 'tty' => 'Tty', 'openStdin' => 'OpenStdin', 'stdinOnce' => 'StdinOnce', 'env' => 'Env', 'cmd' => 'Cmd', 'healthcheck' => 'Healthcheck', 'argsEscaped' => 'ArgsEscaped', 'image' => 'Image', 'volumes' => 'Volumes', 'workingDir' => 'WorkingDir', 'entrypoint' => 'Entrypoint', 'networkDisabled' => 'NetworkDisabled', 'onBuild' => 'OnBuild', 'labels' => 'Labels', 'stopSignal' => 'StopSignal', 'stopTimeout' => 'StopTimeout', 'shell' => 'Shell'];
    }
}
