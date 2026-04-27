<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use function array_key_exists;

class Storage
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
     * Information about the storage used for the container's root filesystem.
     *
     * @var RootFSStorage
     */
    protected $rootFS;

    /**
     * Information about the storage used for the container's root filesystem.
     *
     * @return RootFSStorage
     */
    public function getRootFS(): RootFSStorage
    {
        return $this->rootFS;
    }

    /**
     * Information about the storage used for the container's root filesystem.
     *
     * @param RootFSStorage $rootFS
     *
     * @return self
     */
    public function setRootFS(RootFSStorage $rootFS): self
    {
        $this->initialized['rootFS'] = true;
        $this->rootFS                = $rootFS;

        return $this;
    }
}
