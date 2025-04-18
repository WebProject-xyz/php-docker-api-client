<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use ArrayObject;
use function array_key_exists;

class TaskSpecContainerSpecConfigsItem extends ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * File represents a specific target that is backed by a file.
     *
     * <p><br /><p>
     *
     * > **Note**: `Configs.File` and `Configs.Runtime` are mutually exclusive
     *
     * @var TaskSpecContainerSpecConfigsItemFile
     */
    protected $file;
    /**
     * Runtime represents a target that is not mounted into the
     * container but is used by the task.
     *
     * <p><br /><p>
     *
     * > **Note**: `Configs.File` and `Configs.Runtime` are mutually
     * > exclusive
     *
     * @var TaskSpecContainerSpecConfigsItemRuntime
     */
    protected $runtime;
    /**
     * ConfigID represents the ID of the specific config that we're
     * referencing.
     *
     * @var string
     */
    protected $configID;
    /**
     * ConfigName is the name of the config that this references,
     * but this is just provided for lookup/display purposes. The
     * config in the reference will be identified by its ID.
     *
     * @var string
     */
    protected $configName;

    /**
     * File represents a specific target that is backed by a file.
     *
     * <p><br /><p>
     *
     * > **Note**: `Configs.File` and `Configs.Runtime` are mutually exclusive
     *
     * @return TaskSpecContainerSpecConfigsItemFile
     */
    public function getFile(): TaskSpecContainerSpecConfigsItemFile
    {
        return $this->file;
    }

    /**
     * File represents a specific target that is backed by a file.
     *
     * <p><br /><p>
     *
     * > **Note**: `Configs.File` and `Configs.Runtime` are mutually exclusive
     *
     * @param TaskSpecContainerSpecConfigsItemFile $file
     *
     * @return self
     */
    public function setFile(TaskSpecContainerSpecConfigsItemFile $file): self
    {
        $this->initialized['file'] = true;
        $this->file                = $file;

        return $this;
    }

    /**
     * Runtime represents a target that is not mounted into the
     * container but is used by the task.
     *
     * <p><br /><p>
     *
     * > **Note**: `Configs.File` and `Configs.Runtime` are mutually
     * > exclusive
     *
     * @return TaskSpecContainerSpecConfigsItemRuntime
     */
    public function getRuntime(): TaskSpecContainerSpecConfigsItemRuntime
    {
        return $this->runtime;
    }

    /**
     * Runtime represents a target that is not mounted into the
     * container but is used by the task.
     *
     * <p><br /><p>
     *
     * > **Note**: `Configs.File` and `Configs.Runtime` are mutually
     * > exclusive
     *
     * @param TaskSpecContainerSpecConfigsItemRuntime $runtime
     *
     * @return self
     */
    public function setRuntime(TaskSpecContainerSpecConfigsItemRuntime $runtime): self
    {
        $this->initialized['runtime'] = true;
        $this->runtime                = $runtime;

        return $this;
    }

    /**
     * ConfigID represents the ID of the specific config that we're
     * referencing.
     *
     * @return string
     */
    public function getConfigID(): string
    {
        return $this->configID;
    }

    /**
     * ConfigID represents the ID of the specific config that we're
     * referencing.
     *
     * @param string $configID
     *
     * @return self
     */
    public function setConfigID(string $configID): self
    {
        $this->initialized['configID'] = true;
        $this->configID                = $configID;

        return $this;
    }

    /**
     * ConfigName is the name of the config that this references,
     * but this is just provided for lookup/display purposes. The
     * config in the reference will be identified by its ID.
     *
     * @return string
     */
    public function getConfigName(): string
    {
        return $this->configName;
    }

    /**
     * ConfigName is the name of the config that this references,
     * but this is just provided for lookup/display purposes. The
     * config in the reference will be identified by its ID.
     *
     * @param string $configName
     *
     * @return self
     */
    public function setConfigName(string $configName): self
    {
        $this->initialized['configName'] = true;
        $this->configName                = $configName;

        return $this;
    }
}
