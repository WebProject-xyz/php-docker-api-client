<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ExecIdStartPostBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Detach from the command.
     *
     * @var bool
     */
    public bool $detach;
    /**
     * Allocate a pseudo-TTY.
     *
     * @var bool
     */
    public bool $tty;
    /**
     * Initial console size, as an `[height, width]` array.
     *
     * @var list<int>|null
     */
    public ?array $consoleSize;

    public function definedProperties(): array
    {
        return ['detach' => 'Detach', 'tty' => 'Tty', 'consoleSize' => 'ConsoleSize'];
    }
}
