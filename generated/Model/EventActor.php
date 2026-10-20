<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class EventActor implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The ID of the object emitting the event.
     *
     * @var string|null
     */
    public ?string $iD;
    /**
     * Various key/value attributes of the object, depending on its type.
     *
     * @var iterable<string, string>|null
     */
    public ?iterable $attributes;

    public function definedProperties(): array
    {
        return ['iD' => 'ID', 'attributes' => 'Attributes'];
    }
}
