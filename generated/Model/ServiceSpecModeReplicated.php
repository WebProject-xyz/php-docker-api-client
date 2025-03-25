<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use ArrayObject;
use function array_key_exists;

class ServiceSpecModeReplicated extends ArrayObject
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
     * @var int
     */
    protected $replicas;

    /**
     * @return int
     */
    public function getReplicas(): int
    {
        return $this->replicas;
    }

    /**
     * @param int $replicas
     *
     * @return self
     */
    public function setReplicas(int $replicas): self
    {
        $this->initialized['replicas'] = true;
        $this->replicas                = $replicas;

        return $this;
    }
}
