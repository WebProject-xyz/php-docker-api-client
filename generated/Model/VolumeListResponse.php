<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class VolumeListResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * List of volumes.
     *
     * @var list<Volume>|null
     */
    public ?array $volumes;
    /**
     * Warnings that occurred when fetching the list of volumes.
     *
     * @var list<string>|null
     */
    public ?array $warnings;

    public function definedProperties(): array
    {
        return ['volumes' => 'Volumes', 'warnings' => 'Warnings'];
    }
}
