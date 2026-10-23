<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class FilesystemChange implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Path to file or directory that has changed.
     *
     * @var string
     */
    public string $path;
    /**
     * Kind of change.
     *
     * Can be one of:
     *
     * - `0`: Modified ("C")
     * - `1`: Added ("A")
     * - `2`: Deleted ("D")
     *
     * @var ChangeType
     */
    public ChangeType $kind;

    public function definedProperties(): array
    {
        return ['path' => 'Path', 'kind' => 'Kind'];
    }
}
