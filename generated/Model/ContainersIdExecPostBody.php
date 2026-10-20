<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ContainersIdExecPostBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Attach to `stdin` of the exec command.
     *
     * @var bool
     */
    public bool $attachStdin;
    /**
     * Attach to `stdout` of the exec command.
     *
     * @var bool
     */
    public bool $attachStdout;
    /**
     * Attach to `stderr` of the exec command.
     *
     * @var bool
     */
    public bool $attachStderr;
    /**
     * Initial console size, as an `[height, width]` array.
     *
     * @var list<int>|null
     */
    public ?array $consoleSize;
    /**
     * Override the key sequence for detaching a container. Format is
     * a single character `[a-Z]` or `ctrl-<value>` where `<value>`
     * is one of: `a-z`, `@`, `^`, `[`, `,` or `_`.
     *
     * @var string
     */
    public string $detachKeys;
    /**
     * Allocate a pseudo-TTY.
     *
     * @var bool
     */
    public bool $tty;
    /**
     * A list of environment variables in the form `["VAR=value", ...]`.
     *
     * @var list<string>
     */
    public array $env;
    /**
     * Command to run, as a string or array of strings.
     *
     * @var list<string>
     */
    public array $cmd;
    /**
     * Runs the exec process with extended privileges.
     *
     * @var bool
     */
    public bool $privileged = false;
    /**
     * The user, and optionally, group to run the exec process inside
     * the container. Format is one of: `user`, `user:group`, `uid`,
     * or `uid:gid`.
     *
     * @var string
     */
    public string $user;
    /**
     * The working directory for the exec process inside the container.
     *
     * @var string
     */
    public string $workingDir;

    public function definedProperties(): array
    {
        return ['attachStdin' => 'AttachStdin', 'attachStdout' => 'AttachStdout', 'attachStderr' => 'AttachStderr', 'consoleSize' => 'ConsoleSize', 'detachKeys' => 'DetachKeys', 'tty' => 'Tty', 'env' => 'Env', 'cmd' => 'Cmd', 'privileged' => 'Privileged', 'user' => 'User', 'workingDir' => 'WorkingDir'];
    }
}
