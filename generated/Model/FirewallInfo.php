<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use ArrayObject;
use function array_key_exists;

class FirewallInfo extends ArrayObject
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
     * The name of the firewall backend driver.
     *
     * @var string
     */
    protected $driver;
    /**
     * Information about the firewall backend, provided as
     * "label" / "value" pairs.
     *
     * <p><br /></p>
     *
     * > **Note**: The information returned in this field, including the
     * > formatting of values and labels, should not be considered stable,
     * > and may change without notice.
     *
     * @var list<list<string>>
     */
    protected $info;

    /**
     * The name of the firewall backend driver.
     *
     * @return string
     */
    public function getDriver(): string
    {
        return $this->driver;
    }

    /**
     * The name of the firewall backend driver.
     *
     * @param string $driver
     *
     * @return self
     */
    public function setDriver(string $driver): self
    {
        $this->initialized['driver'] = true;
        $this->driver                = $driver;

        return $this;
    }

    /**
     * Information about the firewall backend, provided as
     * "label" / "value" pairs.
     *
     * <p><br /></p>
     *
     * > **Note**: The information returned in this field, including the
     * > formatting of values and labels, should not be considered stable,
     * > and may change without notice.
     *
     * @return list<list<string>>
     */
    public function getInfo(): array
    {
        return $this->info;
    }

    /**
     * Information about the firewall backend, provided as
     * "label" / "value" pairs.
     *
     * <p><br /></p>
     *
     * > **Note**: The information returned in this field, including the
     * > formatting of values and labels, should not be considered stable,
     * > and may change without notice.
     *
     * @param list<list<string>> $info
     *
     * @return self
     */
    public function setInfo(array $info): self
    {
        $this->initialized['info'] = true;
        $this->info                = $info;

        return $this;
    }
}
