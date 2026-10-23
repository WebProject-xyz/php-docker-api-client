<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ProcessConfig implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var bool|null
     */
    public ?bool $privileged;
    /**
     * @var string|null
     */
    public ?string $user;
    /**
     * @var bool|null
     */
    public ?bool $tty;
    /**
     * @var string|null
     */
    public ?string $entrypoint;
    /**
     * @var list<string>|null
     */
    public ?array $arguments;

    public function definedProperties(): array
    {
        return ['privileged' => 'privileged', 'user' => 'user', 'tty' => 'tty', 'entrypoint' => 'entrypoint', 'arguments' => 'arguments'];
    }
}
