<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use ArrayObject;
use function array_key_exists;

class ExecIdStartPostBody extends ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Detach from the command.
     *
     * @var bool
     */
    protected $detach;
    /**
     * Allocate a pseudo-TTY.
     *
     * @var bool
     */
    protected $tty;
    /**
     * Initial console size, as an `[height, width]` array.
     *
     * @var list<int>|null
     */
    protected $consoleSize;

    /**
     * Detach from the command.
     *
     * @return bool
     */
    public function getDetach(): bool
    {
        return $this->detach;
    }

    /**
     * Detach from the command.
     *
     * @param bool $detach
     *
     * @return self
     */
    public function setDetach(bool $detach): self
    {
        $this->initialized['detach'] = true;
        $this->detach                = $detach;

        return $this;
    }

    /**
     * Allocate a pseudo-TTY.
     *
     * @return bool
     */
    public function getTty(): bool
    {
        return $this->tty;
    }

    /**
     * Allocate a pseudo-TTY.
     *
     * @param bool $tty
     *
     * @return self
     */
    public function setTty(bool $tty): self
    {
        $this->initialized['tty'] = true;
        $this->tty                = $tty;

        return $this;
    }

    /**
     * Initial console size, as an `[height, width]` array.
     *
     * @return list<int>|null
     */
    public function getConsoleSize(): ?array
    {
        return $this->consoleSize;
    }

    /**
     * Initial console size, as an `[height, width]` array.
     *
     * @param list<int>|null $consoleSize
     *
     * @return self
     */
    public function setConsoleSize(?array $consoleSize): self
    {
        $this->initialized['consoleSize'] = true;
        $this->consoleSize                = $consoleSize;

        return $this;
    }
}
