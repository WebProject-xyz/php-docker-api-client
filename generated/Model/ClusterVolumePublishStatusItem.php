<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use ArrayObject;
use function array_key_exists;

class ClusterVolumePublishStatusItem extends ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The ID of the Swarm node the volume is published on.
     *
     * @var string
     */
    protected $nodeID;
    /**
     * The published state of the volume.
     * `pending-publish` The volume should be published to this node, but the call to the controller plugin to do so has not yet been successfully completed.
     * `published` The volume is published successfully to the node.
     * `pending-node-unpublish` The volume should be unpublished from the node, and the manager is awaiting confirmation from the worker that it has done so.
     * `pending-controller-unpublish` The volume is successfully unpublished from the node, but has not yet been successfully unpublished on the controller.
     *
     * @var string
     */
    protected $state;
    /**
     * A map of strings to strings returned by the CSI controller
     * plugin when a volume is published.
     *
     * @var array<string, string>
     */
    protected $publishContext;

    /**
     * The ID of the Swarm node the volume is published on.
     *
     * @return string
     */
    public function getNodeID(): string
    {
        return $this->nodeID;
    }

    /**
     * The ID of the Swarm node the volume is published on.
     *
     * @param string $nodeID
     *
     * @return self
     */
    public function setNodeID(string $nodeID): self
    {
        $this->initialized['nodeID'] = true;
        $this->nodeID                = $nodeID;

        return $this;
    }

    /**
     * The published state of the volume.
     * `pending-publish` The volume should be published to this node, but the call to the controller plugin to do so has not yet been successfully completed.
     * `published` The volume is published successfully to the node.
     * `pending-node-unpublish` The volume should be unpublished from the node, and the manager is awaiting confirmation from the worker that it has done so.
     * `pending-controller-unpublish` The volume is successfully unpublished from the node, but has not yet been successfully unpublished on the controller.
     *
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * The published state of the volume.
     * `pending-publish` The volume should be published to this node, but the call to the controller plugin to do so has not yet been successfully completed.
     * `published` The volume is published successfully to the node.
     * `pending-node-unpublish` The volume should be unpublished from the node, and the manager is awaiting confirmation from the worker that it has done so.
     * `pending-controller-unpublish` The volume is successfully unpublished from the node, but has not yet been successfully unpublished on the controller.
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state): self
    {
        $this->initialized['state'] = true;
        $this->state                = $state;

        return $this;
    }

    /**
     * A map of strings to strings returned by the CSI controller
     * plugin when a volume is published.
     *
     * @return array<string, string>
     */
    public function getPublishContext(): iterable
    {
        return $this->publishContext;
    }

    /**
     * A map of strings to strings returned by the CSI controller
     * plugin when a volume is published.
     *
     * @param array<string, string> $publishContext
     *
     * @return self
     */
    public function setPublishContext(iterable $publishContext): self
    {
        $this->initialized['publishContext'] = true;
        $this->publishContext                = $publishContext;

        return $this;
    }
}
