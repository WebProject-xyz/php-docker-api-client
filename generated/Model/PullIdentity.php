<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class PullIdentity implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Repository is the remote repository location the image was pulled from.
     *
     * @var string|null
     */
    public ?string $repository;

    public function definedProperties(): array
    {
        return ['repository' => 'Repository'];
    }
}
