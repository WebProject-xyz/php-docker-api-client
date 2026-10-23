<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class MountTmpfsOptions implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The size for the tmpfs mount in bytes.
     *
     * @var int|null
     */
    public ?int $sizeBytes;
    /**
     * The permission mode for the tmpfs mount in an integer.
     * The value must not be in octal format (e.g. 755) but rather
     * the decimal representation of the octal value (e.g. 493).
     *
     * @var int|null
     */
    public ?int $mode;
    /**
     * The options to be passed to the tmpfs mount. An array of arrays.
     * Flag options should be provided as 1-length arrays. Other types
     * should be provided as as 2-length arrays, where the first item is
     * the key and the second the value.
     *
     * @var list<list<string>>|null
     */
    public ?array $options;

    public function definedProperties(): array
    {
        return ['sizeBytes' => 'SizeBytes', 'mode' => 'Mode', 'options' => 'Options'];
    }
}
