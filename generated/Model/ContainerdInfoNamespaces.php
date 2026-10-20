<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ContainerdInfoNamespaces implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The default containerd namespace used for containers managed
     * by the daemon.
     *
     * The default namespace for containers is "moby", but will be
     * suffixed with the `<uid>.<gid>` of the remapped `root` if
     * user-namespaces are enabled and the containerd image-store
     * is used.
     *
     * @var string|null
     */
    public ?string $containers = 'moby';
    /**
     * The default containerd namespace used for plugins managed by
     * the daemon.
     *
     * The default namespace for plugins is "plugins.moby", but will be
     * suffixed with the `<uid>.<gid>` of the remapped `root` if
     * user-namespaces are enabled and the containerd image-store
     * is used.
     *
     * @var string|null
     */
    public ?string $plugins = 'plugins.moby';

    public function definedProperties(): array
    {
        return ['containers' => 'Containers', 'plugins' => 'Plugins'];
    }
}
