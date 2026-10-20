<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class TaskSpec implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Plugin spec for the service.  *(Experimental release only.)*.
     *
     * <p><br /></p>
     *
     * > **Note**: ContainerSpec, NetworkAttachmentSpec, and PluginSpec are
     * > mutually exclusive. PluginSpec is only used when the Runtime field
     * > is set to `plugin`. NetworkAttachmentSpec is used when the Runtime
     * > field is set to `attachment`.
     *
     * @var TaskSpecPluginSpec|null
     */
    public ?TaskSpecPluginSpec $pluginSpec;
    /**
     * Container spec for the service.
     *
     * <p><br /></p>
     *
     * > **Note**: ContainerSpec, NetworkAttachmentSpec, and PluginSpec are
     * > mutually exclusive. PluginSpec is only used when the Runtime field
     * > is set to `plugin`. NetworkAttachmentSpec is used when the Runtime
     * > field is set to `attachment`.
     *
     * @var TaskSpecContainerSpec|null
     */
    public ?TaskSpecContainerSpec $containerSpec;
    /**
     * Read-only spec type for non-swarm containers attached to swarm overlay
     * networks.
     *
     * <p><br /></p>
     *
     * > **Note**: ContainerSpec, NetworkAttachmentSpec, and PluginSpec are
     * > mutually exclusive. PluginSpec is only used when the Runtime field
     * > is set to `plugin`. NetworkAttachmentSpec is used when the Runtime
     * > field is set to `attachment`.
     *
     * @var TaskSpecNetworkAttachmentSpec|null
     */
    public ?TaskSpecNetworkAttachmentSpec $networkAttachmentSpec;
    /**
     * Resource requirements which apply to each individual container created
     * as part of the service.
     *
     * @var TaskSpecResources|null
     */
    public ?TaskSpecResources $resources;
    /**
     * Specification for the restart policy which applies to containers
     * created as part of this service.
     *
     * @var TaskSpecRestartPolicy|null
     */
    public ?TaskSpecRestartPolicy $restartPolicy;
    /**
     * @var TaskSpecPlacement|null
     */
    public ?TaskSpecPlacement $placement;
    /**
     * A counter that triggers an update even if no relevant parameters have
     * been changed.
     *
     * @var int|null
     */
    public ?int $forceUpdate;
    /**
     * Runtime is the type of runtime specified for the task executor.
     *
     * @var string|null
     */
    public ?string $runtime;
    /**
     * Specifies which networks the service should attach to.
     *
     * @var list<NetworkAttachmentConfig>|null
     */
    public ?array $networks;
    /**
     * Specifies the log driver to use for tasks created from this spec. If
     * not present, the default one for the swarm will be used, finally
     * falling back to the engine default if not specified.
     *
     * @var TaskSpecLogDriver|null
     */
    public ?TaskSpecLogDriver $logDriver;

    public function definedProperties(): array
    {
        return ['pluginSpec' => 'PluginSpec', 'containerSpec' => 'ContainerSpec', 'networkAttachmentSpec' => 'NetworkAttachmentSpec', 'resources' => 'Resources', 'restartPolicy' => 'RestartPolicy', 'placement' => 'Placement', 'forceUpdate' => 'ForceUpdate', 'runtime' => 'Runtime', 'networks' => 'Networks', 'logDriver' => 'LogDriver'];
    }
}
