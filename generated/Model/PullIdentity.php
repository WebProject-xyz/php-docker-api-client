<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use function array_key_exists;

class PullIdentity
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
     * Repository is the remote repository location the image was pulled from.
     *
     * @var string|null
     */
    protected $repository;

    /**
     * Repository is the remote repository location the image was pulled from.
     *
     * @return string|null
     */
    public function getRepository(): ?string
    {
        return $this->repository;
    }

    /**
     * Repository is the remote repository location the image was pulled from.
     *
     * @param string|null $repository
     *
     * @return self
     */
    public function setRepository(?string $repository): self
    {
        $this->initialized['repository'] = true;
        $this->repository                = $repository;

        return $this;
    }
}
