<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use function array_key_exists;

class ImageManifestSummaryImageData
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
     * Describes the platform which the image in the manifest runs on, as defined
     * in the [OCI Image Index Specification](https://github.com/opencontainers/image-spec/blob/v1.0.1/image-index.md).
     *
     * @var OCIPlatform|null
     */
    protected $platform;
    /**
     * Identity holds information about the identity and origin of the image.
     * This is trusted information verified by the daemon and cannot be modified
     * by tagging an image to a different name.
     *
     * @var Identity
     */
    protected $identity;
    /**
     * The IDs of the containers that are using this image.
     *
     * @var list<string>
     */
    protected $containers;
    /**
     * @var ImageManifestSummaryImageDataSize
     */
    protected $size;

    /**
     * Describes the platform which the image in the manifest runs on, as defined
     * in the [OCI Image Index Specification](https://github.com/opencontainers/image-spec/blob/v1.0.1/image-index.md).
     *
     * @return OCIPlatform|null
     */
    public function getPlatform(): ?OCIPlatform
    {
        return $this->platform;
    }

    /**
     * Describes the platform which the image in the manifest runs on, as defined
     * in the [OCI Image Index Specification](https://github.com/opencontainers/image-spec/blob/v1.0.1/image-index.md).
     *
     * @param OCIPlatform|null $platform
     *
     * @return self
     */
    public function setPlatform(?OCIPlatform $platform): self
    {
        $this->initialized['platform'] = true;
        $this->platform                = $platform;

        return $this;
    }

    /**
     * Identity holds information about the identity and origin of the image.
     * This is trusted information verified by the daemon and cannot be modified
     * by tagging an image to a different name.
     *
     * @return Identity
     */
    public function getIdentity(): Identity
    {
        return $this->identity;
    }

    /**
     * Identity holds information about the identity and origin of the image.
     * This is trusted information verified by the daemon and cannot be modified
     * by tagging an image to a different name.
     *
     * @param Identity $identity
     *
     * @return self
     */
    public function setIdentity(Identity $identity): self
    {
        $this->initialized['identity'] = true;
        $this->identity                = $identity;

        return $this;
    }

    /**
     * The IDs of the containers that are using this image.
     *
     * @return list<string>
     */
    public function getContainers(): array
    {
        return $this->containers;
    }

    /**
     * The IDs of the containers that are using this image.
     *
     * @param list<string> $containers
     *
     * @return self
     */
    public function setContainers(array $containers): self
    {
        $this->initialized['containers'] = true;
        $this->containers                = $containers;

        return $this;
    }

    /**
     * @return ImageManifestSummaryImageDataSize
     */
    public function getSize(): ImageManifestSummaryImageDataSize
    {
        return $this->size;
    }

    /**
     * @param ImageManifestSummaryImageDataSize $size
     *
     * @return self
     */
    public function setSize(ImageManifestSummaryImageDataSize $size): self
    {
        $this->initialized['size'] = true;
        $this->size                = $size;

        return $this;
    }
}
