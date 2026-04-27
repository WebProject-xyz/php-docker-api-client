<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use function array_key_exists;

class NRIInfo
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
     * Information about NRI, provided as "label" / "value" pairs.
     *
     * <p><br /></p>
     *
     * > **Note**: The information returned in this field, including the
     * > formatting of values and labels, should not be considered stable,
     * > and may change without notice.
     *
     * @var list<list<string>>|null
     */
    protected $info;

    /**
     * Information about NRI, provided as "label" / "value" pairs.
     *
     * <p><br /></p>
     *
     * > **Note**: The information returned in this field, including the
     * > formatting of values and labels, should not be considered stable,
     * > and may change without notice.
     *
     * @return list<list<string>>|null
     */
    public function getInfo(): ?array
    {
        return $this->info;
    }

    /**
     * Information about NRI, provided as "label" / "value" pairs.
     *
     * <p><br /></p>
     *
     * > **Note**: The information returned in this field, including the
     * > formatting of values and labels, should not be considered stable,
     * > and may change without notice.
     *
     * @param list<list<string>>|null $info
     *
     * @return self
     */
    public function setInfo(?array $info): self
    {
        $this->initialized['info'] = true;
        $this->info                = $info;

        return $this;
    }
}
