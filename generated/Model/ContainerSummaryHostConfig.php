<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ContainerSummaryHostConfig implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Networking mode (`host`, `none`, `container:<id>`) or name of the
     * primary network the container is using.
     *
     * This field is primarily for backward compatibility. The container
     * can be connected to multiple networks for which information can be
     * found in the `NetworkSettings.Networks` field, which enumerates
     * settings per network.
     *
     * @var string|null
     */
    public ?string $networkMode;
    /**
     * Arbitrary key-value metadata attached to the container.
     *
     * @var iterable<string, string>|null
     */
    public ?iterable $annotations;

    public function definedProperties(): array
    {
        return ['networkMode' => 'NetworkMode', 'annotations' => 'Annotations'];
    }
}
