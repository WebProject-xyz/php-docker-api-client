<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ClusterVolumePublishStatusItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The ID of the Swarm node the volume is published on.
     *
     * @var string|null
     */
    public ?string $nodeID;
    /**
     * The published state of the volume.
     * * `pending-publish` The volume should be published to this node, but the call to the controller plugin to do so has not yet been successfully completed.
     * * `published` The volume is published successfully to the node.
     * * `pending-node-unpublish` The volume should be unpublished from the node, and the manager is awaiting confirmation from the worker that it has done so.
     * * `pending-controller-unpublish` The volume is successfully unpublished from the node, but has not yet been successfully unpublished on the controller.
     *
     * @var string|null
     */
    public ?string $state;
    /**
     * A map of strings to strings returned by the CSI controller
     * plugin when a volume is published.
     *
     * @var iterable<string, string>|null
     */
    public ?iterable $publishContext;

    public function definedProperties(): array
    {
        return ['nodeID' => 'NodeID', 'state' => 'State', 'publishContext' => 'PublishContext'];
    }
}
