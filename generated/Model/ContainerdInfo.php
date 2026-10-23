<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ContainerdInfo implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The address of the containerd socket.
     *
     * @var string|null
     */
    public ?string $address;
    /**
     * The namespaces that the daemon uses for running containers and
     * plugins in containerd. These namespaces can be configured in the
     * daemon configuration, and are considered to be used exclusively
     * by the daemon, Tampering with the containerd instance may cause
     * unexpected behavior.
     *
     * As these namespaces are considered to be exclusively accessed
     * by the daemon, it is not recommended to change these values,
     * or to change them to a value that is used by other systems,
     * such as cri-containerd.
     *
     * @var ContainerdInfoNamespaces|null
     */
    public ?ContainerdInfoNamespaces $namespaces;

    public function definedProperties(): array
    {
        return ['address' => 'Address', 'namespaces' => 'Namespaces'];
    }
}
