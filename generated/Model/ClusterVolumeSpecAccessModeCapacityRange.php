<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ClusterVolumeSpecAccessModeCapacityRange implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The volume must be at least this big. The value of 0
     * indicates an unspecified minimum.
     *
     * @var int|null
     */
    public ?int $requiredBytes;
    /**
     * The volume must not be bigger than this. The value of 0
     * indicates an unspecified maximum.
     *
     * @var int|null
     */
    public ?int $limitBytes;

    public function definedProperties(): array
    {
        return ['requiredBytes' => 'RequiredBytes', 'limitBytes' => 'LimitBytes'];
    }
}
