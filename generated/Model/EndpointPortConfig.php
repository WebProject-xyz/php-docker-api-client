<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class EndpointPortConfig implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string|null
     */
    public ?string $name;
    /**
     * @var string|null
     */
    public ?string $protocol;
    /**
     * The port inside the container.
     *
     * @var int|null
     */
    public ?int $targetPort;
    /**
     * The port on the swarm hosts.
     *
     * @var int|null
     */
    public ?int $publishedPort;
    /**
     * The mode in which port is published.
     *
     * <p><br /></p>
     *
     * - "ingress" makes the target port accessible on every node,
     *   regardless of whether there is a task for the service running on
     *   that node or not.
     * - "host" bypasses the routing mesh and publish the port directly on
     *   the swarm node where that service is running.
     *
     * @var string|null
     */
    public ?string $publishMode = 'ingress';

    public function definedProperties(): array
    {
        return ['name' => 'Name', 'protocol' => 'Protocol', 'targetPort' => 'TargetPort', 'publishedPort' => 'PublishedPort', 'publishMode' => 'PublishMode'];
    }
}
