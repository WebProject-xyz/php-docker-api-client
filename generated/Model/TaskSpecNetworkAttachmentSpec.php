<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class TaskSpecNetworkAttachmentSpec implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * ID of the container represented by this task.
     *
     * @var string|null
     */
    public ?string $containerID;

    public function definedProperties(): array
    {
        return ['containerID' => 'ContainerID'];
    }
}
