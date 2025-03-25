<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use ArrayObject;
use function array_key_exists;

class IPAMConfig extends ArrayObject
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
     * @var string
     */
    protected $subnet;
    /**
     * @var string
     */
    protected $iPRange;
    /**
     * @var string
     */
    protected $gateway;
    /**
     * @var array<string, string>
     */
    protected $auxiliaryAddresses;

    /**
     * @return string
     */
    public function getSubnet(): string
    {
        return $this->subnet;
    }

    /**
     * @param string $subnet
     *
     * @return self
     */
    public function setSubnet(string $subnet): self
    {
        $this->initialized['subnet'] = true;
        $this->subnet                = $subnet;

        return $this;
    }

    /**
     * @return string
     */
    public function getIPRange(): string
    {
        return $this->iPRange;
    }

    /**
     * @param string $iPRange
     *
     * @return self
     */
    public function setIPRange(string $iPRange): self
    {
        $this->initialized['iPRange'] = true;
        $this->iPRange                = $iPRange;

        return $this;
    }

    /**
     * @return string
     */
    public function getGateway(): string
    {
        return $this->gateway;
    }

    /**
     * @param string $gateway
     *
     * @return self
     */
    public function setGateway(string $gateway): self
    {
        $this->initialized['gateway'] = true;
        $this->gateway                = $gateway;

        return $this;
    }

    /**
     * @return array<string, string>
     */
    public function getAuxiliaryAddresses(): iterable
    {
        return $this->auxiliaryAddresses;
    }

    /**
     * @param array<string, string> $auxiliaryAddresses
     *
     * @return self
     */
    public function setAuxiliaryAddresses(iterable $auxiliaryAddresses): self
    {
        $this->initialized['auxiliaryAddresses'] = true;
        $this->auxiliaryAddresses                = $auxiliaryAddresses;

        return $this;
    }
}
