<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use ArrayObject;
use function array_key_exists;

class ClusterVolumeSpecAccessModeCapacityRange extends ArrayObject
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
     * The volume must be at least this big. The value of 0
     * indicates an unspecified minimum.
     *
     * @var int
     */
    protected $requiredBytes;
    /**
     * The volume must not be bigger than this. The value of 0
     * indicates an unspecified maximum.
     *
     * @var int
     */
    protected $limitBytes;

    /**
     * The volume must be at least this big. The value of 0
     * indicates an unspecified minimum.
     *
     * @return int
     */
    public function getRequiredBytes(): int
    {
        return $this->requiredBytes;
    }

    /**
     * The volume must be at least this big. The value of 0
     * indicates an unspecified minimum.
     *
     * @param int $requiredBytes
     *
     * @return self
     */
    public function setRequiredBytes(int $requiredBytes): self
    {
        $this->initialized['requiredBytes'] = true;
        $this->requiredBytes                = $requiredBytes;

        return $this;
    }

    /**
     * The volume must not be bigger than this. The value of 0
     * indicates an unspecified maximum.
     *
     * @return int
     */
    public function getLimitBytes(): int
    {
        return $this->limitBytes;
    }

    /**
     * The volume must not be bigger than this. The value of 0
     * indicates an unspecified maximum.
     *
     * @param int $limitBytes
     *
     * @return self
     */
    public function setLimitBytes(int $limitBytes): self
    {
        $this->initialized['limitBytes'] = true;
        $this->limitBytes                = $limitBytes;

        return $this;
    }
}
