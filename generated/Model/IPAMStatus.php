<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use function array_key_exists;

class IPAMStatus
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
     * @var array<string, SubnetStatus>
     */
    protected $subnets;

    /**
     * @return array<string, SubnetStatus>
     */
    public function getSubnets(): iterable
    {
        return $this->subnets;
    }

    /**
     * @param array<string, SubnetStatus> $subnets
     *
     * @return self
     */
    public function setSubnets(iterable $subnets): self
    {
        $this->initialized['subnets'] = true;
        $this->subnets                = $subnets;

        return $this;
    }
}
