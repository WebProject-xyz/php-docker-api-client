<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ServiceCreateResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The ID of the created service.
     *
     * @var string
     */
    public string $iD;
    /**
     * Optional warning message.
     *
     * FIXME(thaJeztah): this should have "omitempty" in the generated type.
     *
     * @var list<string>|null
     */
    public ?array $warnings;

    public function definedProperties(): array
    {
        return ['iD' => 'ID', 'warnings' => 'Warnings'];
    }
}
