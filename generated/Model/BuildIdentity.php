<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use function array_key_exists;

class BuildIdentity
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
     * Ref is the identifier for the build request. This reference can be used to
     * look up the build details in BuildKit history API.
     *
     * @var string|null
     */
    protected $ref;
    /**
     * CreatedAt is the time when the build ran.
     *
     * @var string|null
     */
    protected $createdAt;

    /**
     * Ref is the identifier for the build request. This reference can be used to
     * look up the build details in BuildKit history API.
     *
     * @return string|null
     */
    public function getRef(): ?string
    {
        return $this->ref;
    }

    /**
     * Ref is the identifier for the build request. This reference can be used to
     * look up the build details in BuildKit history API.
     *
     * @param string|null $ref
     *
     * @return self
     */
    public function setRef(?string $ref): self
    {
        $this->initialized['ref'] = true;
        $this->ref                = $ref;

        return $this;
    }

    /**
     * CreatedAt is the time when the build ran.
     *
     * @return string|null
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    /**
     * CreatedAt is the time when the build ran.
     *
     * @param string|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?string $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt                = $createdAt;

        return $this;
    }
}
