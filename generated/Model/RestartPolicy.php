<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class RestartPolicy implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * - Empty string means not to restart
     * - `no` Do not automatically restart
     * - `always` Always restart
     * - `unless-stopped` Restart always except when the user has manually stopped the container
     * - `on-failure` Restart only when the container exit code is non-zero.
     *
     * @var string|null
     */
    public ?string $name;
    /**
     * If `on-failure` is used, the number of times to retry before giving up.
     *
     * @var int|null
     */
    public ?int $maximumRetryCount;

    public function definedProperties(): array
    {
        return ['name' => 'Name', 'maximumRetryCount' => 'MaximumRetryCount'];
    }
}
