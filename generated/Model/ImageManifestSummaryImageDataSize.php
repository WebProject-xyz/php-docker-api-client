<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ImageManifestSummaryImageDataSize implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Unpacked is the size (in bytes) of the locally unpacked
     * (uncompressed) image content that's directly usable by the containers
     * running this image.
     * It's independent of the distributable content - e.g.
     * the image might still have an unpacked data that's still used by
     * some container even when the distributable/compressed content is
     * already gone.
     *
     * @var int
     */
    public int $unpacked;

    public function definedProperties(): array
    {
        return ['unpacked' => 'Unpacked'];
    }
}
