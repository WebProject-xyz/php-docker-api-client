<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use ArrayObject;
use function array_key_exists;

class ImageManifestSummaryAttestationData extends ArrayObject
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
     * The digest of the image manifest that this attestation is for.
     *
     * @var string
     */
    protected $for;

    /**
     * The digest of the image manifest that this attestation is for.
     *
     * @return string
     */
    public function getFor(): string
    {
        return $this->for;
    }

    /**
     * The digest of the image manifest that this attestation is for.
     *
     * @param string $for
     *
     * @return self
     */
    public function setFor(string $for): self
    {
        $this->initialized['for'] = true;
        $this->for                = $for;

        return $this;
    }
}
