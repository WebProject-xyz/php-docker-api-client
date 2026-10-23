<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ServiceEndpointVirtualIPsItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string|null
     */
    public ?string $networkID;
    /**
     * @var string|null
     */
    public ?string $addr;

    public function definedProperties(): array
    {
        return ['networkID' => 'NetworkID', 'addr' => 'Addr'];
    }
}
