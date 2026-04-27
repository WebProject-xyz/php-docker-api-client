<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use function array_key_exists;

class NetworkStatus
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
     * @var IPAMStatus
     */
    protected $iPAM;

    /**
     * @return IPAMStatus
     */
    public function getIPAM(): IPAMStatus
    {
        return $this->iPAM;
    }

    /**
     * @param IPAMStatus $iPAM
     *
     * @return self
     */
    public function setIPAM(IPAMStatus $iPAM): self
    {
        $this->initialized['iPAM'] = true;
        $this->iPAM                = $iPAM;

        return $this;
    }
}
