<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use ArrayObject;
use function array_key_exists;

class TaskSpecPlacementPreferencesItemSpread extends ArrayObject
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
     * label descriptor, such as `engine.labels.az`.
     *
     * @var string
     */
    protected $spreadDescriptor;

    /**
     * label descriptor, such as `engine.labels.az`.
     *
     * @return string
     */
    public function getSpreadDescriptor(): string
    {
        return $this->spreadDescriptor;
    }

    /**
     * label descriptor, such as `engine.labels.az`.
     *
     * @param string $spreadDescriptor
     *
     * @return self
     */
    public function setSpreadDescriptor(string $spreadDescriptor): self
    {
        $this->initialized['spreadDescriptor'] = true;
        $this->spreadDescriptor                = $spreadDescriptor;

        return $this;
    }
}
