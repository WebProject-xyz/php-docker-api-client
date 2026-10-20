<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class AuthResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The status of the authentication.
     *
     * @var string
     */
    public string $status;
    /**
     * An opaque token used to authenticate a user after a successful login.
     *
     * @var string
     */
    public string $identityToken;

    public function definedProperties(): array
    {
        return ['status' => 'Status', 'identityToken' => 'IdentityToken'];
    }
}
