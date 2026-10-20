<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class NRIInfo implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Information about NRI, provided as "label" / "value" pairs.
     *
     * <p><br /></p>
     *
     * > **Note**: The information returned in this field, including the
     * > formatting of values and labels, should not be considered stable,
     * > and may change without notice.
     *
     * @var list<list<string>>|null
     */
    public ?array $info;

    public function definedProperties(): array
    {
        return ['info' => 'Info'];
    }
}
