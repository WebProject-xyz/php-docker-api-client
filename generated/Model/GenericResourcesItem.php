<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use ArrayObject;
use function array_key_exists;

class GenericResourcesItem extends ArrayObject
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
     * @var GenericResourcesItemNamedResourceSpec
     */
    protected $namedResourceSpec;
    /**
     * @var GenericResourcesItemDiscreteResourceSpec
     */
    protected $discreteResourceSpec;

    /**
     * @return GenericResourcesItemNamedResourceSpec
     */
    public function getNamedResourceSpec(): GenericResourcesItemNamedResourceSpec
    {
        return $this->namedResourceSpec;
    }

    /**
     * @param GenericResourcesItemNamedResourceSpec $namedResourceSpec
     *
     * @return self
     */
    public function setNamedResourceSpec(GenericResourcesItemNamedResourceSpec $namedResourceSpec): self
    {
        $this->initialized['namedResourceSpec'] = true;
        $this->namedResourceSpec                = $namedResourceSpec;

        return $this;
    }

    /**
     * @return GenericResourcesItemDiscreteResourceSpec
     */
    public function getDiscreteResourceSpec(): GenericResourcesItemDiscreteResourceSpec
    {
        return $this->discreteResourceSpec;
    }

    /**
     * @param GenericResourcesItemDiscreteResourceSpec $discreteResourceSpec
     *
     * @return self
     */
    public function setDiscreteResourceSpec(GenericResourcesItemDiscreteResourceSpec $discreteResourceSpec): self
    {
        $this->initialized['discreteResourceSpec'] = true;
        $this->discreteResourceSpec                = $discreteResourceSpec;

        return $this;
    }
}
