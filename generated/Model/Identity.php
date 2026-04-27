<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use function array_key_exists;

class Identity
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
     * Signature contains the properties of verified signatures for the image.
     *
     * @var list<SignatureIdentity>|null
     */
    protected $signature;
    /**
     * Pull contains remote location information if image was created via pull.
     * If image was pulled via mirror, this contains the original repository location.
     * After successful push this images also contains the pushed repository location.
     *
     * @var list<PullIdentity>|null
     */
    protected $pull;
    /**
     * Build contains build reference information if image was created via build.
     *
     * @var list<BuildIdentity>|null
     */
    protected $build;

    /**
     * Signature contains the properties of verified signatures for the image.
     *
     * @return list<SignatureIdentity>|null
     */
    public function getSignature(): ?array
    {
        return $this->signature;
    }

    /**
     * Signature contains the properties of verified signatures for the image.
     *
     * @param list<SignatureIdentity>|null $signature
     *
     * @return self
     */
    public function setSignature(?array $signature): self
    {
        $this->initialized['signature'] = true;
        $this->signature                = $signature;

        return $this;
    }

    /**
     * Pull contains remote location information if image was created via pull.
     * If image was pulled via mirror, this contains the original repository location.
     * After successful push this images also contains the pushed repository location.
     *
     * @return list<PullIdentity>|null
     */
    public function getPull(): ?array
    {
        return $this->pull;
    }

    /**
     * Pull contains remote location information if image was created via pull.
     * If image was pulled via mirror, this contains the original repository location.
     * After successful push this images also contains the pushed repository location.
     *
     * @param list<PullIdentity>|null $pull
     *
     * @return self
     */
    public function setPull(?array $pull): self
    {
        $this->initialized['pull'] = true;
        $this->pull                = $pull;

        return $this;
    }

    /**
     * Build contains build reference information if image was created via build.
     *
     * @return list<BuildIdentity>|null
     */
    public function getBuild(): ?array
    {
        return $this->build;
    }

    /**
     * Build contains build reference information if image was created via build.
     *
     * @param list<BuildIdentity>|null $build
     *
     * @return self
     */
    public function setBuild(?array $build): self
    {
        $this->initialized['build'] = true;
        $this->build                = $build;

        return $this;
    }
}
