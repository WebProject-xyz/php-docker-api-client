<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class TaskSpecContainerSpecConfigsItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * File represents a specific target that is backed by a file.
     *
     * <p><br /><p>
     *
     * > **Note**: `Configs.File` and `Configs.Runtime` are mutually exclusive
     *
     * @var TaskSpecContainerSpecConfigsItemFile|null
     */
    public ?TaskSpecContainerSpecConfigsItemFile $file;
    /**
     * Runtime represents a target that is not mounted into the
     * container but is used by the task.
     *
     * <p><br /><p>
     *
     * > **Note**: `Configs.File` and `Configs.Runtime` are mutually
     * > exclusive
     *
     * @var mixed|null
     */
    public $runtime;
    /**
     * ConfigID represents the ID of the specific config that we're
     * referencing.
     *
     * @var string|null
     */
    public ?string $configID;
    /**
     * ConfigName is the name of the config that this references,
     * but this is just provided for lookup/display purposes. The
     * config in the reference will be identified by its ID.
     *
     * @var string|null
     */
    public ?string $configName;

    public function definedProperties(): array
    {
        return ['file' => 'File', 'runtime' => 'Runtime', 'configID' => 'ConfigID', 'configName' => 'ConfigName'];
    }
}
