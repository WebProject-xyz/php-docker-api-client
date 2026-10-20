<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class SwarmSpecTaskDefaults implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The log driver to use for tasks created in the orchestrator if
     * unspecified by a service.
     *
     * Updating this value only affects new tasks. Existing tasks continue
     * to use their previously configured log driver until recreated.
     *
     * @var SwarmSpecTaskDefaultsLogDriver|null
     */
    public ?SwarmSpecTaskDefaultsLogDriver $logDriver;

    public function definedProperties(): array
    {
        return ['logDriver' => 'LogDriver'];
    }
}
