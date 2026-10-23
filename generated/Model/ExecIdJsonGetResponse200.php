<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ExecIdJsonGetResponse200 implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var bool
     */
    public bool $canRemove;
    /**
     * @var string
     */
    public string $detachKeys;
    /**
     * @var string
     */
    public string $iD;
    /**
     * @var bool
     */
    public bool $running;
    /**
     * @var int
     */
    public int $exitCode;
    /**
     * @var ProcessConfig
     */
    public ProcessConfig $processConfig;
    /**
     * @var bool
     */
    public bool $openStdin;
    /**
     * @var bool
     */
    public bool $openStderr;
    /**
     * @var bool
     */
    public bool $openStdout;
    /**
     * @var string
     */
    public string $containerID;
    /**
     * The system process ID for the exec process.
     *
     * @var int
     */
    public int $pid;

    public function definedProperties(): array
    {
        return ['canRemove' => 'CanRemove', 'detachKeys' => 'DetachKeys', 'iD' => 'ID', 'running' => 'Running', 'exitCode' => 'ExitCode', 'processConfig' => 'ProcessConfig', 'openStdin' => 'OpenStdin', 'openStderr' => 'OpenStderr', 'openStdout' => 'OpenStdout', 'containerID' => 'ContainerID', 'pid' => 'Pid'];
    }
}
