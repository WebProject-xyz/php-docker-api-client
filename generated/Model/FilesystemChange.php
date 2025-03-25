<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use ArrayObject;
use function array_key_exists;

class FilesystemChange extends ArrayObject
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
     * Path to file or directory that has changed.
     *
     * @var string
     */
    protected $path;
    /**
     * Kind of change.
     *
     * Can be one of:
     *
     * - `0`: Modified ("C")
     * - `1`: Added ("A")
     * - `2`: Deleted ("D")
     *
     * @var int
     */
    protected $kind;

    /**
     * Path to file or directory that has changed.
     *
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * Path to file or directory that has changed.
     *
     * @param string $path
     *
     * @return self
     */
    public function setPath(string $path): self
    {
        $this->initialized['path'] = true;
        $this->path                = $path;

        return $this;
    }

    /**
     * Kind of change.
     *
     * Can be one of:
     *
     * - `0`: Modified ("C")
     * - `1`: Added ("A")
     * - `2`: Deleted ("D")
     *
     * @return int
     */
    public function getKind(): int
    {
        return $this->kind;
    }

    /**
     * Kind of change.
     *
     * Can be one of:
     *
     * - `0`: Modified ("C")
     * - `1`: Added ("A")
     * - `2`: Deleted ("D")
     *
     * @param int $kind
     *
     * @return self
     */
    public function setKind(int $kind): self
    {
        $this->initialized['kind'] = true;
        $this->kind                = $kind;

        return $this;
    }
}
