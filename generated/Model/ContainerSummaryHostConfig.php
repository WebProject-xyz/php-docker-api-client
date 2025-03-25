<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use ArrayObject;
use function array_key_exists;

class ContainerSummaryHostConfig extends ArrayObject
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
     * Networking mode (`host`, `none`, `container:<id>`) or name of the
     * primary network the container is using.
     *
     * This field is primarily for backward compatibility. The container
     * can be connected to multiple networks for which information can be
     * found in the `NetworkSettings.Networks` field, which enumerates
     * settings per network.
     *
     * @var string
     */
    protected $networkMode;
    /**
     * Arbitrary key-value metadata attached to the container.
     *
     * @var array<string, string>|null
     */
    protected $annotations;

    /**
     * Networking mode (`host`, `none`, `container:<id>`) or name of the
     * primary network the container is using.
     *
     * This field is primarily for backward compatibility. The container
     * can be connected to multiple networks for which information can be
     * found in the `NetworkSettings.Networks` field, which enumerates
     * settings per network.
     *
     * @return string
     */
    public function getNetworkMode(): string
    {
        return $this->networkMode;
    }

    /**
     * Networking mode (`host`, `none`, `container:<id>`) or name of the
     * primary network the container is using.
     *
     * This field is primarily for backward compatibility. The container
     * can be connected to multiple networks for which information can be
     * found in the `NetworkSettings.Networks` field, which enumerates
     * settings per network.
     *
     * @param string $networkMode
     *
     * @return self
     */
    public function setNetworkMode(string $networkMode): self
    {
        $this->initialized['networkMode'] = true;
        $this->networkMode                = $networkMode;

        return $this;
    }

    /**
     * Arbitrary key-value metadata attached to the container.
     *
     * @return array<string, string>|null
     */
    public function getAnnotations(): ?iterable
    {
        return $this->annotations;
    }

    /**
     * Arbitrary key-value metadata attached to the container.
     *
     * @param array<string, string>|null $annotations
     *
     * @return self
     */
    public function setAnnotations(?iterable $annotations): self
    {
        $this->initialized['annotations'] = true;
        $this->annotations                = $annotations;

        return $this;
    }
}
