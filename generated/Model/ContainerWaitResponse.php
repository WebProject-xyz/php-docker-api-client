<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ContainerWaitResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Exit code of the container.
     *
     * @var int
     */
    public int $statusCode;
    /**
     * container waiting error, if any.
     *
     * @var ContainerWaitExitError
     */
    public ContainerWaitExitError $error;

    public function definedProperties(): array
    {
        return ['statusCode' => 'StatusCode', 'error' => 'Error'];
    }
}
