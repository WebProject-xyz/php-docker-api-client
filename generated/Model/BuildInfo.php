<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class BuildInfo implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string|null
     */
    public ?string $id;
    /**
     * @var string|null
     */
    public ?string $stream;
    /**
     * @var ErrorDetail
     */
    public ErrorDetail $errorDetail;
    /**
     * @var string|null
     */
    public ?string $status;
    /**
     * @var ProgressDetail
     */
    public ProgressDetail $progressDetail;
    /**
     * Image ID or Digest.
     *
     * @var ImageID
     */
    public ImageID $aux;

    public function definedProperties(): array
    {
        return ['id' => 'id', 'stream' => 'stream', 'errorDetail' => 'errorDetail', 'status' => 'status', 'progressDetail' => 'progressDetail', 'aux' => 'aux'];
    }
}
