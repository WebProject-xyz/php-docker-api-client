<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ContainerTopResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The ps column titles.
     *
     * @var list<string>|null
     */
    public ?array $titles;
    /**
     * Each process running in the container, where each process
     * is an array of values corresponding to the titles.
     *
     * @var list<list<string>>|null
     */
    public ?array $processes;

    public function definedProperties(): array
    {
        return ['titles' => 'Titles', 'processes' => 'Processes'];
    }
}
