<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class AuthConfig implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string|null
     */
    public ?string $username;
    /**
     * @var string|null
     */
    public ?string $password;
    /**
     * @var string|null
     */
    public ?string $serveraddress;

    public function definedProperties(): array
    {
        return ['username' => 'username', 'password' => 'password', 'serveraddress' => 'serveraddress'];
    }
}
