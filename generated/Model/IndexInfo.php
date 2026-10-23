<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class IndexInfo implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Name of the registry, such as "docker.io".
     *
     * @var string|null
     */
    public ?string $name;
    /**
     * List of mirrors, expressed as URIs.
     *
     * @var list<string>|null
     */
    public ?array $mirrors;
    /**
     * Indicates if the registry is part of the list of insecure
     * registries.
     *
     * If `false`, the registry is insecure. Insecure registries accept
     * un-encrypted (HTTP) and/or untrusted (HTTPS with certificates from
     * unknown CAs) communication.
     *
     * > **Warning**: Insecure registries can be useful when running a local
     * > registry. However, because its use creates security vulnerabilities
     * > it should ONLY be enabled for testing purposes. For increased
     * > security, users should add their CA to their system's list of
     * > trusted CAs instead of enabling this option.
     *
     * @var bool|null
     */
    public ?bool $secure;
    /**
     * Indicates whether this is an official registry (i.e., Docker Hub / docker.io).
     *
     * @var bool|null
     */
    public ?bool $official;

    public function definedProperties(): array
    {
        return ['name' => 'Name', 'mirrors' => 'Mirrors', 'secure' => 'Secure', 'official' => 'Official'];
    }
}
