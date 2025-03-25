<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use ArrayObject;
use function array_key_exists;

class ContainerStorageStats extends ArrayObject
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
     * @var int|null
     */
    protected $readCountNormalized;
    /**
     * @var int|null
     */
    protected $readSizeBytes;
    /**
     * @var int|null
     */
    protected $writeCountNormalized;
    /**
     * @var int|null
     */
    protected $writeSizeBytes;

    /**
     * @return int|null
     */
    public function getReadCountNormalized(): ?int
    {
        return $this->readCountNormalized;
    }

    /**
     * @param int|null $readCountNormalized
     *
     * @return self
     */
    public function setReadCountNormalized(?int $readCountNormalized): self
    {
        $this->initialized['readCountNormalized'] = true;
        $this->readCountNormalized                = $readCountNormalized;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getReadSizeBytes(): ?int
    {
        return $this->readSizeBytes;
    }

    /**
     * @param int|null $readSizeBytes
     *
     * @return self
     */
    public function setReadSizeBytes(?int $readSizeBytes): self
    {
        $this->initialized['readSizeBytes'] = true;
        $this->readSizeBytes                = $readSizeBytes;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getWriteCountNormalized(): ?int
    {
        return $this->writeCountNormalized;
    }

    /**
     * @param int|null $writeCountNormalized
     *
     * @return self
     */
    public function setWriteCountNormalized(?int $writeCountNormalized): self
    {
        $this->initialized['writeCountNormalized'] = true;
        $this->writeCountNormalized                = $writeCountNormalized;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getWriteSizeBytes(): ?int
    {
        return $this->writeSizeBytes;
    }

    /**
     * @param int|null $writeSizeBytes
     *
     * @return self
     */
    public function setWriteSizeBytes(?int $writeSizeBytes): self
    {
        $this->initialized['writeSizeBytes'] = true;
        $this->writeSizeBytes                = $writeSizeBytes;

        return $this;
    }
}
