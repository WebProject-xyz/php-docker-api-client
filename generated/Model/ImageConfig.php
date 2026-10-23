<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ImageConfig implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The user that commands are run as inside the container.
     *
     * @var string|null
     */
    public ?string $user;
    /**
     * An object mapping ports to an empty object in the form:
     *
     * `{"<port>/<tcp|udp|sctp>": {}}`
     *
     * @var iterable<string, mixed>|null
     */
    public ?iterable $exposedPorts;
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
     * Shell for when `RUN`, `CMD`, and `ENTRYPOINT` uses a shell.
     *
     * @var list<string>|null
     */
    public ?array $shell;

    public function definedProperties(): array
    {
        return ['user' => 'User', 'exposedPorts' => 'ExposedPorts', 'env' => 'Env', 'cmd' => 'Cmd', 'healthcheck' => 'Healthcheck', 'argsEscaped' => 'ArgsEscaped', 'volumes' => 'Volumes', 'workingDir' => 'WorkingDir', 'entrypoint' => 'Entrypoint', 'onBuild' => 'OnBuild', 'labels' => 'Labels', 'stopSignal' => 'StopSignal', 'shell' => 'Shell'];
    }
}
