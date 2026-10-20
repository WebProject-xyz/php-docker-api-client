<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ServiceUpdateResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Optional warning messages.
     *
     * @var list<string>|null
     */
    public ?array $warnings;

    public function definedProperties(): array
    {
        return ['warnings' => 'Warnings'];
    }
}
