<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class JoinTokens implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The token workers can use to join the swarm.
     *
     * @var string|null
     */
    public ?string $worker;
    /**
     * The token managers can use to join the swarm.
     *
     * @var string|null
     */
    public ?string $manager;

    public function definedProperties(): array
    {
        return ['worker' => 'Worker', 'manager' => 'Manager'];
    }
}
