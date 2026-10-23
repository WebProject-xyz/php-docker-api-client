<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ContainerStatus implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string|null
     */
    public ?string $containerID;
    /**
     * @var int|null
     */
    public ?int $pID;
    /**
     * @var int|null
     */
    public ?int $exitCode;

    public function definedProperties(): array
    {
        return ['containerID' => 'ContainerID', 'pID' => 'PID', 'exitCode' => 'ExitCode'];
    }
}
