<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ContainerWaitExitError implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Details of an error.
     *
     * @var string|null
     */
    public ?string $message;

    public function definedProperties(): array
    {
        return ['message' => 'Message'];
    }
}
