<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class SystemVersionComponentsItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Name of the component.
     *
     * @var string
     */
    public string $name;
    /**
     * Version of the component.
     *
     * @var string
     */
    public string $version;
    /**
     * Key/value pairs of strings with additional information about the
     * component. These values are intended for informational purposes
     * only, and their content is not defined, and not part of the API
     * specification.
     *
     * These messages can be printed by the client as information to the user.
     *
     * @var mixed|null
     */
    public $details;

    public function definedProperties(): array
    {
        return ['name' => 'Name', 'version' => 'Version', 'details' => 'Details'];
    }
}
