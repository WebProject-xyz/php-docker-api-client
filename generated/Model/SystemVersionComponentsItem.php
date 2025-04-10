<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use ArrayObject;
use function array_key_exists;

class SystemVersionComponentsItem extends ArrayObject
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
     * Name of the component.
     *
     * @var string
     */
    protected $name;
    /**
     * Version of the component.
     *
     * @var string
     */
    protected $version;
    /**
     * Key/value pairs of strings with additional information about the
     * component. These values are intended for informational purposes
     * only, and their content is not defined, and not part of the API
     * specification.
     *
     * These messages can be printed by the client as information to the user.
     *
     * @var SystemVersionComponentsItemDetails|null
     */
    protected $details;

    /**
     * Name of the component.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Name of the component.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name                = $name;

        return $this;
    }

    /**
     * Version of the component.
     *
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }

    /**
     * Version of the component.
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion(string $version): self
    {
        $this->initialized['version'] = true;
        $this->version                = $version;

        return $this;
    }

    /**
     * Key/value pairs of strings with additional information about the
     * component. These values are intended for informational purposes
     * only, and their content is not defined, and not part of the API
     * specification.
     *
     * These messages can be printed by the client as information to the user.
     *
     * @return SystemVersionComponentsItemDetails|null
     */
    public function getDetails(): ?SystemVersionComponentsItemDetails
    {
        return $this->details;
    }

    /**
     * Key/value pairs of strings with additional information about the
     * component. These values are intended for informational purposes
     * only, and their content is not defined, and not part of the API
     * specification.
     *
     * These messages can be printed by the client as information to the user.
     *
     * @param SystemVersionComponentsItemDetails|null $details
     *
     * @return self
     */
    public function setDetails(?SystemVersionComponentsItemDetails $details): self
    {
        $this->initialized['details'] = true;
        $this->details                = $details;

        return $this;
    }
}
