<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use function array_key_exists;

class Topology
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
     * @var array<string, string>|null
     */
    protected $segments;

    /**
     * @return array<string, string>|null
     */
    public function getSegments(): ?iterable
    {
        return $this->segments;
    }

    /**
     * @param array<string, string>|null $segments
     *
     * @return self
     */
    public function setSegments(?iterable $segments): self
    {
        $this->initialized['segments'] = true;
        $this->segments                = $segments;

        return $this;
    }
}
