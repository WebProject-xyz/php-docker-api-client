<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class NetworkTaskInfo implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string|null
     */
    public ?string $name;
    /**
     * @var string|null
     */
    public ?string $endpointID;
    /**
     * @var string|null
     */
    public ?string $endpointIP;
    /**
     * @var iterable<string, string>|null
     */
    public ?iterable $info;

    public function definedProperties(): array
    {
        return ['name' => 'Name', 'endpointID' => 'EndpointID', 'endpointIP' => 'EndpointIP', 'info' => 'Info'];
    }
}
