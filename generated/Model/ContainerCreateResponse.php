<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use ArrayObject;
use function array_key_exists;

class ContainerCreateResponse extends ArrayObject
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
     * The ID of the created container.
     *
     * @var string
     */
    protected $id;
    /**
     * Warnings encountered when creating the container.
     *
     * @var list<string>
     */
    protected $warnings;

    /**
     * The ID of the created container.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * The ID of the created container.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id                = $id;

        return $this;
    }

    /**
     * Warnings encountered when creating the container.
     *
     * @return list<string>
     */
    public function getWarnings(): array
    {
        return $this->warnings;
    }

    /**
     * Warnings encountered when creating the container.
     *
     * @param list<string> $warnings
     *
     * @return self
     */
    public function setWarnings(array $warnings): self
    {
        $this->initialized['warnings'] = true;
        $this->warnings                = $warnings;

        return $this;
    }
}
