<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class SwarmUnlockkeyGetTextplainResponse200 implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The swarm's unlock key.
     *
     * @var string
     */
    public string $unlockKey;

    public function definedProperties(): array
    {
        return ['unlockKey' => 'UnlockKey'];
    }
}
