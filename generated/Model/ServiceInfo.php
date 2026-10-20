<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ServiceInfo implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string|null
     */
    public ?string $vIP;
    /**
     * @var list<string>|null
     */
    public ?array $ports;
    /**
     * @var int|null
     */
    public ?int $localLBIndex;
    /**
     * @var list<NetworkTaskInfo>|null
     */
    public ?array $tasks;

    public function definedProperties(): array
    {
        return ['vIP' => 'VIP', 'ports' => 'Ports', 'localLBIndex' => 'LocalLBIndex', 'tasks' => 'Tasks'];
    }
}
