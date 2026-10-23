<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ImagesSearchGetResponse200Item implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $description;
    /**
     * @var bool
     */
    public bool $isOfficial;
    /**
     * Whether this repository has automated builds enabled.
     *
     * <p><br /></p>
     *
     * > **Deprecated**: This field is deprecated and will always be "false".
     *
     * @var bool
     */
    public bool $isAutomated;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var int
     */
    public int $starCount;

    public function definedProperties(): array
    {
        return ['description' => 'description', 'isOfficial' => 'is_official', 'isAutomated' => 'is_automated', 'name' => 'name', 'starCount' => 'star_count'];
    }
}
