<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use function array_key_exists;

class SignatureTimestamp
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
     * SignatureTimestampType is the type of timestamp used in the signature.
     *
     * @var string
     */
    protected $type;
    /**
     * @var string|null
     */
    protected $uRI;
    /**
     * @var string|null
     */
    protected $timestamp;

    /**
     * SignatureTimestampType is the type of timestamp used in the signature.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * SignatureTimestampType is the type of timestamp used in the signature.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type                = $type;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getURI(): ?string
    {
        return $this->uRI;
    }

    /**
     * @param string|null $uRI
     *
     * @return self
     */
    public function setURI(?string $uRI): self
    {
        $this->initialized['uRI'] = true;
        $this->uRI                = $uRI;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTimestamp(): ?string
    {
        return $this->timestamp;
    }

    /**
     * @param string|null $timestamp
     *
     * @return self
     */
    public function setTimestamp(?string $timestamp): self
    {
        $this->initialized['timestamp'] = true;
        $this->timestamp                = $timestamp;

        return $this;
    }
}
