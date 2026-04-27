<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use function array_key_exists;

class MountImageOptions
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
     * Source path inside the image. Must be relative without any back traversals.
     *
     * @var string|null
     */
    protected $subpath;

    /**
     * Source path inside the image. Must be relative without any back traversals.
     *
     * @return string|null
     */
    public function getSubpath(): ?string
    {
        return $this->subpath;
    }

    /**
     * Source path inside the image. Must be relative without any back traversals.
     *
     * @param string|null $subpath
     *
     * @return self
     */
    public function setSubpath(?string $subpath): self
    {
        $this->initialized['subpath'] = true;
        $this->subpath                = $subpath;

        return $this;
    }
}
