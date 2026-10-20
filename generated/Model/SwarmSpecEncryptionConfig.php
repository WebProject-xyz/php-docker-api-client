<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class SwarmSpecEncryptionConfig implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * If set, generate a key and use it to lock data stored on the
     * managers.
     *
     * @var bool|null
     */
    public ?bool $autoLockManagers;

    public function definedProperties(): array
    {
        return ['autoLockManagers' => 'AutoLockManagers'];
    }
}
