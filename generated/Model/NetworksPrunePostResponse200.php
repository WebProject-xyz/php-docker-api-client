<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use ArrayObject;
use function array_key_exists;

class NetworksPrunePostResponse200 extends ArrayObject
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
     * Networks that were deleted.
     *
     * @var list<string>
     */
    protected $networksDeleted;

    /**
     * Networks that were deleted.
     *
     * @return list<string>
     */
    public function getNetworksDeleted(): array
    {
        return $this->networksDeleted;
    }

    /**
     * Networks that were deleted.
     *
     * @param list<string> $networksDeleted
     *
     * @return self
     */
    public function setNetworksDeleted(array $networksDeleted): self
    {
        $this->initialized['networksDeleted'] = true;
        $this->networksDeleted                = $networksDeleted;

        return $this;
    }
}
