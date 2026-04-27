<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use function array_key_exists;

class ResourceObject
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
     * @var int|null
     */
    protected $nanoCPUs;
    /**
     * @var int|null
     */
    protected $memoryBytes;
    /**
     * User-defined resources can be either Integer resources (e.g, `SSD=3`) or
     * String resources (e.g, `GPU=UUID1`).
     *
     * @var list<GenericResourcesItem>
     */
    protected $genericResources;

    /**
     * @return int|null
     */
    public function getNanoCPUs(): ?int
    {
        return $this->nanoCPUs;
    }

    /**
     * @param int|null $nanoCPUs
     *
     * @return self
     */
    public function setNanoCPUs(?int $nanoCPUs): self
    {
        $this->initialized['nanoCPUs'] = true;
        $this->nanoCPUs                = $nanoCPUs;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getMemoryBytes(): ?int
    {
        return $this->memoryBytes;
    }

    /**
     * @param int|null $memoryBytes
     *
     * @return self
     */
    public function setMemoryBytes(?int $memoryBytes): self
    {
        $this->initialized['memoryBytes'] = true;
        $this->memoryBytes                = $memoryBytes;

        return $this;
    }

    /**
     * User-defined resources can be either Integer resources (e.g, `SSD=3`) or
     * String resources (e.g, `GPU=UUID1`).
     *
     * @return list<GenericResourcesItem>
     */
    public function getGenericResources(): array
    {
        return $this->genericResources;
    }

    /**
     * User-defined resources can be either Integer resources (e.g, `SSD=3`) or
     * String resources (e.g, `GPU=UUID1`).
     *
     * @param list<GenericResourcesItem> $genericResources
     *
     * @return self
     */
    public function setGenericResources(array $genericResources): self
    {
        $this->initialized['genericResources'] = true;
        $this->genericResources                = $genericResources;

        return $this;
    }
}
