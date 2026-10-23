<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class FirewallInfo implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The name of the firewall backend driver.
     *
     * @var string|null
     */
    public ?string $driver;
    /**
     * Information about the firewall backend, provided as
     * "label" / "value" pairs.
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
        return ['driver' => 'Driver', 'info' => 'Info'];
    }
}
