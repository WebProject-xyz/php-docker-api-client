<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ContainerStorageStats implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var int|null
     */
    public ?int $readCountNormalized;
    /**
     * @var int|null
     */
    public ?int $readSizeBytes;
    /**
     * @var int|null
     */
    public ?int $writeCountNormalized;
    /**
     * @var int|null
     */
    public ?int $writeSizeBytes;

    public function definedProperties(): array
    {
        return ['readCountNormalized' => 'read_count_normalized', 'readSizeBytes' => 'read_size_bytes', 'writeCountNormalized' => 'write_count_normalized', 'writeSizeBytes' => 'write_size_bytes'];
    }
}
