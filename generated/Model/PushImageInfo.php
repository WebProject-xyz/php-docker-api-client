<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class PushImageInfo implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
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

    public function definedProperties(): array
    {
        return ['errorDetail' => 'errorDetail', 'status' => 'status', 'progressDetail' => 'progressDetail'];
    }
}
