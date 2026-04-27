<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use function array_key_exists;

class RootFSStorage
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
     * Information about a snapshot backend of the container's root filesystem.
     *
     * @var RootFSStorageSnapshot
     */
    protected $snapshot;

    /**
     * Information about a snapshot backend of the container's root filesystem.
     *
     * @return RootFSStorageSnapshot
     */
    public function getSnapshot(): RootFSStorageSnapshot
    {
        return $this->snapshot;
    }

    /**
     * Information about a snapshot backend of the container's root filesystem.
     *
     * @param RootFSStorageSnapshot $snapshot
     *
     * @return self
     */
    public function setSnapshot(RootFSStorageSnapshot $snapshot): self
    {
        $this->initialized['snapshot'] = true;
        $this->snapshot                = $snapshot;

        return $this;
    }
}
