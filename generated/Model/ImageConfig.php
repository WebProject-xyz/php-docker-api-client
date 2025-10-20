<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use ArrayObject;
use function array_key_exists;

class ImageConfig extends ArrayObject
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
     * The user that commands are run as inside the container.
     *
     * @var string
     */
    protected $user;
    /**
     * An object mapping ports to an empty object in the form:
     *
     * `{"<port>/<tcp|udp|sctp>": {}}`
     *
     * @var array<string, array<string, mixed>>|null
     */
    protected $exposedPorts;
    /**
     * A list of environment variables to set inside the container in the
     * form `["VAR=value", ...]`. A variable without `=` is removed from the
     * environment, rather than to have an empty value.
     *
     * @var list<string>
     */
    protected $env;
    /**
     * Command to run specified as a string or an array of strings.
     *
     * @var list<string>
     */
    protected $cmd;
    /**
     * A test to perform to check that the container is healthy.
     *
     * @var HealthConfig
     */
    protected $healthcheck;
    /**
     * Command is already escaped (Windows only).
     *
     * @var bool|null
     */
    protected $argsEscaped = false;
    /**
     * An object mapping mount point paths inside the container to empty
     * objects.
     *
     * @var array<string, array<string, mixed>>
     */
    protected $volumes;
    /**
     * The working directory for commands to run in.
     *
     * @var string
     */
    protected $workingDir;
    /**
     * The entry point for the container as a string or an array of strings.
     *
     * If the array consists of exactly one empty string (`[""]`) then the
     * entry point is reset to system default (i.e., the entry point used by
     * docker when there is no `ENTRYPOINT` instruction in the `Dockerfile`).
     *
     * @var list<string>
     */
    protected $entrypoint;
    /**
     * `ONBUILD` metadata that were defined in the image's `Dockerfile`.
     *
     * @var list<string>|null
     */
    protected $onBuild;
    /**
     * User-defined key/value metadata.
     *
     * @var array<string, string>
     */
    protected $labels;
    /**
     * Signal to stop a container as a string or unsigned integer.
     *
     * @var string|null
     */
    protected $stopSignal;
    /**
     * Shell for when `RUN`, `CMD`, and `ENTRYPOINT` uses a shell.
     *
     * @var list<string>|null
     */
    protected $shell;

    /**
     * The user that commands are run as inside the container.
     *
     * @return string
     */
    public function getUser(): string
    {
        return $this->user;
    }

    /**
     * The user that commands are run as inside the container.
     *
     * @param string $user
     *
     * @return self
     */
    public function setUser(string $user): self
    {
        $this->initialized['user'] = true;
        $this->user                = $user;

        return $this;
    }

    /**
     * An object mapping ports to an empty object in the form:
     *
     * `{"<port>/<tcp|udp|sctp>": {}}`
     *
     * @return array<string, array<string, mixed>>|null
     */
    public function getExposedPorts(): ?iterable
    {
        return $this->exposedPorts;
    }

    /**
     * An object mapping ports to an empty object in the form:
     *
     * `{"<port>/<tcp|udp|sctp>": {}}`
     *
     * @param array<string, array<string, mixed>>|null $exposedPorts
     *
     * @return self
     */
    public function setExposedPorts(?iterable $exposedPorts): self
    {
        $this->initialized['exposedPorts'] = true;
        $this->exposedPorts                = $exposedPorts;

        return $this;
    }

    /**
     * A list of environment variables to set inside the container in the
     * form `["VAR=value", ...]`. A variable without `=` is removed from the
     * environment, rather than to have an empty value.
     *
     * @return list<string>
     */
    public function getEnv(): array
    {
        return $this->env;
    }

    /**
     * A list of environment variables to set inside the container in the
     * form `["VAR=value", ...]`. A variable without `=` is removed from the
     * environment, rather than to have an empty value.
     *
     * @param list<string> $env
     *
     * @return self
     */
    public function setEnv(array $env): self
    {
        $this->initialized['env'] = true;
        $this->env                = $env;

        return $this;
    }

    /**
     * Command to run specified as a string or an array of strings.
     *
     * @return list<string>
     */
    public function getCmd(): array
    {
        return $this->cmd;
    }

    /**
     * Command to run specified as a string or an array of strings.
     *
     * @param list<string> $cmd
     *
     * @return self
     */
    public function setCmd(array $cmd): self
    {
        $this->initialized['cmd'] = true;
        $this->cmd                = $cmd;

        return $this;
    }

    /**
     * A test to perform to check that the container is healthy.
     *
     * @return HealthConfig
     */
    public function getHealthcheck(): HealthConfig
    {
        return $this->healthcheck;
    }

    /**
     * A test to perform to check that the container is healthy.
     *
     * @param HealthConfig $healthcheck
     *
     * @return self
     */
    public function setHealthcheck(HealthConfig $healthcheck): self
    {
        $this->initialized['healthcheck'] = true;
        $this->healthcheck                = $healthcheck;

        return $this;
    }

    /**
     * Command is already escaped (Windows only).
     *
     * @return bool|null
     */
    public function getArgsEscaped(): ?bool
    {
        return $this->argsEscaped;
    }

    /**
     * Command is already escaped (Windows only).
     *
     * @param bool|null $argsEscaped
     *
     * @return self
     */
    public function setArgsEscaped(?bool $argsEscaped): self
    {
        $this->initialized['argsEscaped'] = true;
        $this->argsEscaped                = $argsEscaped;

        return $this;
    }

    /**
     * An object mapping mount point paths inside the container to empty
     * objects.
     *
     * @return array<string, array<string, mixed>>
     */
    public function getVolumes(): iterable
    {
        return $this->volumes;
    }

    /**
     * An object mapping mount point paths inside the container to empty
     * objects.
     *
     * @param array<string, array<string, mixed>> $volumes
     *
     * @return self
     */
    public function setVolumes(iterable $volumes): self
    {
        $this->initialized['volumes'] = true;
        $this->volumes                = $volumes;

        return $this;
    }

    /**
     * The working directory for commands to run in.
     *
     * @return string
     */
    public function getWorkingDir(): string
    {
        return $this->workingDir;
    }

    /**
     * The working directory for commands to run in.
     *
     * @param string $workingDir
     *
     * @return self
     */
    public function setWorkingDir(string $workingDir): self
    {
        $this->initialized['workingDir'] = true;
        $this->workingDir                = $workingDir;

        return $this;
    }

    /**
     * The entry point for the container as a string or an array of strings.
     *
     * If the array consists of exactly one empty string (`[""]`) then the
     * entry point is reset to system default (i.e., the entry point used by
     * docker when there is no `ENTRYPOINT` instruction in the `Dockerfile`).
     *
     * @return list<string>
     */
    public function getEntrypoint(): array
    {
        return $this->entrypoint;
    }

    /**
     * The entry point for the container as a string or an array of strings.
     *
     * If the array consists of exactly one empty string (`[""]`) then the
     * entry point is reset to system default (i.e., the entry point used by
     * docker when there is no `ENTRYPOINT` instruction in the `Dockerfile`).
     *
     * @param list<string> $entrypoint
     *
     * @return self
     */
    public function setEntrypoint(array $entrypoint): self
    {
        $this->initialized['entrypoint'] = true;
        $this->entrypoint                = $entrypoint;

        return $this;
    }

    /**
     * `ONBUILD` metadata that were defined in the image's `Dockerfile`.
     *
     * @return list<string>|null
     */
    public function getOnBuild(): ?array
    {
        return $this->onBuild;
    }

    /**
     * `ONBUILD` metadata that were defined in the image's `Dockerfile`.
     *
     * @param list<string>|null $onBuild
     *
     * @return self
     */
    public function setOnBuild(?array $onBuild): self
    {
        $this->initialized['onBuild'] = true;
        $this->onBuild                = $onBuild;

        return $this;
    }

    /**
     * User-defined key/value metadata.
     *
     * @return array<string, string>
     */
    public function getLabels(): iterable
    {
        return $this->labels;
    }

    /**
     * User-defined key/value metadata.
     *
     * @param array<string, string> $labels
     *
     * @return self
     */
    public function setLabels(iterable $labels): self
    {
        $this->initialized['labels'] = true;
        $this->labels                = $labels;

        return $this;
    }

    /**
     * Signal to stop a container as a string or unsigned integer.
     *
     * @return string|null
     */
    public function getStopSignal(): ?string
    {
        return $this->stopSignal;
    }

    /**
     * Signal to stop a container as a string or unsigned integer.
     *
     * @param string|null $stopSignal
     *
     * @return self
     */
    public function setStopSignal(?string $stopSignal): self
    {
        $this->initialized['stopSignal'] = true;
        $this->stopSignal                = $stopSignal;

        return $this;
    }

    /**
     * Shell for when `RUN`, `CMD`, and `ENTRYPOINT` uses a shell.
     *
     * @return list<string>|null
     */
    public function getShell(): ?array
    {
        return $this->shell;
    }

    /**
     * Shell for when `RUN`, `CMD`, and `ENTRYPOINT` uses a shell.
     *
     * @param list<string>|null $shell
     *
     * @return self
     */
    public function setShell(?array $shell): self
    {
        $this->initialized['shell'] = true;
        $this->shell                = $shell;

        return $this;
    }
}
