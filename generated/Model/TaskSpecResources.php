<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class TaskSpecResources implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * An object describing a limit on resources which can be requested by a task.
     *
     * @var Limit
     */
    public Limit $limits;
    /**
     * An object describing the resources which can be advertised by a node and
     * requested by a task.
     *
     * @var ResourceObject
     */
    public ResourceObject $reservations;
    /**
     * Amount of swap in bytes - can only be used together with a memory limit.
     * If not specified, the default behaviour is to grant a swap space twice
     * as big as the memory limit.
     * Set to -1 to enable unlimited swap.
     *
     * @var int|null
     */
    public ?int $swapBytes;
    /**
     * Tune the service's containers' memory swappiness (0 to 100).
     * If not specified, defaults to the containers' OS' default, generally 60,
     * or whatever value was predefined in the image.
     * Set to -1 to unset a previously set value.
     *
     * @var int|null
     */
    public ?int $memorySwappiness;

    public function definedProperties(): array
    {
        return ['limits' => 'Limits', 'reservations' => 'Reservations', 'swapBytes' => 'SwapBytes', 'memorySwappiness' => 'MemorySwappiness'];
    }
}
