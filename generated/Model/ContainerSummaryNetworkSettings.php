<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ContainerSummaryNetworkSettings implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Summary of network-settings for each network the container is
     * attached to.
     *
     * @var iterable<string, EndpointSettings>
     */
    public iterable $networks;

    public function definedProperties(): array
    {
        return ['networks' => 'Networks'];
    }
}
