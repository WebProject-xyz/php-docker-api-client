<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ServiceSpec implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Name of the service.
     *
     * @var string|null
     */
    public ?string $name;
    /**
     * User-defined key/value metadata.
     *
     * @var iterable<string, string>|null
     */
    public ?iterable $labels;
    /**
     * User modifiable task configuration.
     *
     * @var TaskSpec
     */
    public TaskSpec $taskTemplate;
    /**
     * Scheduling mode for the service.
     *
     * @var ServiceSpecMode|null
     */
    public ?ServiceSpecMode $mode;
    /**
     * Specification for the update strategy of the service.
     *
     * @var ServiceSpecUpdateConfig|null
     */
    public ?ServiceSpecUpdateConfig $updateConfig;
    /**
     * Specification for the rollback strategy of the service.
     *
     * @var ServiceSpecRollbackConfig|null
     */
    public ?ServiceSpecRollbackConfig $rollbackConfig;
    /**
     * Specifies which networks the service should attach to.
     *
     * Deprecated: This field is deprecated since v1.44. The Networks field in TaskSpec should be used instead.
     *
     * @var list<NetworkAttachmentConfig>|null
     */
    public ?array $networks;
    /**
     * Properties that can be configured to access and load balance a service.
     *
     * @var EndpointSpec
     */
    public EndpointSpec $endpointSpec;

    public function definedProperties(): array
    {
        return ['name' => 'Name', 'labels' => 'Labels', 'taskTemplate' => 'TaskTemplate', 'mode' => 'Mode', 'updateConfig' => 'UpdateConfig', 'rollbackConfig' => 'RollbackConfig', 'networks' => 'Networks', 'endpointSpec' => 'EndpointSpec'];
    }
}
