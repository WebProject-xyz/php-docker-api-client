<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class TaskSpecContainerSpecSecretsItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * File represents a specific target that is backed by a file.
     *
     * @var TaskSpecContainerSpecSecretsItemFile|null
     */
    public ?TaskSpecContainerSpecSecretsItemFile $file;
    /**
     * SecretID represents the ID of the specific secret that we're
     * referencing.
     *
     * @var string|null
     */
    public ?string $secretID;
    /**
     * SecretName is the name of the secret that this references,
     * but this is just provided for lookup/display purposes. The
     * secret in the reference will be identified by its ID.
     *
     * @var string|null
     */
    public ?string $secretName;

    public function definedProperties(): array
    {
        return ['file' => 'File', 'secretID' => 'SecretID', 'secretName' => 'SecretName'];
    }
}
