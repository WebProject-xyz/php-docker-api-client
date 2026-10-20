<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class NetworksPrunePostResponse200 implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Networks that were deleted.
     *
     * @var list<string>
     */
    public array $networksDeleted;

    public function definedProperties(): array
    {
        return ['networksDeleted' => 'NetworksDeleted'];
    }
}
