<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use function array_key_exists;

class MountTmpfsOptions
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
     * The size for the tmpfs mount in bytes.
     *
     * @var int|null
     */
    protected $sizeBytes;
    /**
     * The permission mode for the tmpfs mount in an integer.
     * The value must not be in octal format (e.g. 755) but rather
     * the decimal representation of the octal value (e.g. 493).
     *
     * @var int|null
     */
    protected $mode;
    /**
     * The options to be passed to the tmpfs mount. An array of arrays.
     * Flag options should be provided as 1-length arrays. Other types
     * should be provided as as 2-length arrays, where the first item is
     * the key and the second the value.
     *
     * @var list<list<string>>|null
     */
    protected $options;

    /**
     * The size for the tmpfs mount in bytes.
     *
     * @return int|null
     */
    public function getSizeBytes(): ?int
    {
        return $this->sizeBytes;
    }

    /**
     * The size for the tmpfs mount in bytes.
     *
     * @param int|null $sizeBytes
     *
     * @return self
     */
    public function setSizeBytes(?int $sizeBytes): self
    {
        $this->initialized['sizeBytes'] = true;
        $this->sizeBytes                = $sizeBytes;

        return $this;
    }

    /**
     * The permission mode for the tmpfs mount in an integer.
     * The value must not be in octal format (e.g. 755) but rather
     * the decimal representation of the octal value (e.g. 493).
     *
     * @return int|null
     */
    public function getMode(): ?int
    {
        return $this->mode;
    }

    /**
     * The permission mode for the tmpfs mount in an integer.
     * The value must not be in octal format (e.g. 755) but rather
     * the decimal representation of the octal value (e.g. 493).
     *
     * @param int|null $mode
     *
     * @return self
     */
    public function setMode(?int $mode): self
    {
        $this->initialized['mode'] = true;
        $this->mode                = $mode;

        return $this;
    }

    /**
     * The options to be passed to the tmpfs mount. An array of arrays.
     * Flag options should be provided as 1-length arrays. Other types
     * should be provided as as 2-length arrays, where the first item is
     * the key and the second the value.
     *
     * @return list<list<string>>|null
     */
    public function getOptions(): ?array
    {
        return $this->options;
    }

    /**
     * The options to be passed to the tmpfs mount. An array of arrays.
     * Flag options should be provided as 1-length arrays. Other types
     * should be provided as as 2-length arrays, where the first item is
     * the key and the second the value.
     *
     * @param list<list<string>>|null $options
     *
     * @return self
     */
    public function setOptions(?array $options): self
    {
        $this->initialized['options'] = true;
        $this->options                = $options;

        return $this;
    }
}
