<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class TaskSpecContainerSpecDNSConfig implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The IP addresses of the name servers.
     *
     * @var list<string>|null
     */
    public ?array $nameservers;
    /**
     * A search list for host-name lookup.
     *
     * @var list<string>|null
     */
    public ?array $search;
    /**
     * A list of internal resolver variables to be modified (e.g.,
     * `debug`, `ndots:3`, etc.).
     *
     * @var list<string>|null
     */
    public ?array $options;

    public function definedProperties(): array
    {
        return ['nameservers' => 'Nameservers', 'search' => 'Search', 'options' => 'Options'];
    }
}
