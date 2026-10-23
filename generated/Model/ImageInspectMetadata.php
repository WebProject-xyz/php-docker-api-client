<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use DateTimeInterface;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ImageInspectMetadata implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Date and time at which the image was last tagged in
     * [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
     *
     * This information is only available if the image was tagged locally,
     * and omitted otherwise.
     *
     * @var DateTimeInterface|null
     */
    public ?DateTimeInterface $lastTagTime;

    public function definedProperties(): array
    {
        return ['lastTagTime' => 'LastTagTime'];
    }
}
