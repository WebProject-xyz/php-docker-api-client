<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ImageManifestSummarySize implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Total is the total size (in bytes) of all the locally present
     * data (both distributable and non-distributable) that's related to
     * this manifest and its children.
     * This equal to the sum of [Content] size AND all the sizes in the
     * [Size] struct present in the Kind-specific data struct.
     * For example, for an image kind (Kind == "image")
     * this would include the size of the image content and unpacked
     * image snapshots ([Size.Content] + [ImageData.Size.Unpacked]).
     *
     * @var int
     */
    public int $total;
    /**
     * Content is the size (in bytes) of all the locally present
     * content in the content store (e.g. image config, layers)
     * referenced by this manifest and its children.
     * This only includes blobs in the content store.
     *
     * @var int
     */
    public int $content;

    public function definedProperties(): array
    {
        return ['total' => 'Total', 'content' => 'Content'];
    }
}
