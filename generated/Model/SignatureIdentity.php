<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class SignatureIdentity implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Name is a textual description summarizing the type of signature.
     *
     * @var string|null
     */
    public ?string $name;
    /**
     * Timestamps contains a list of verified signed timestamps for the signature.
     *
     * @var list<SignatureTimestamp>|null
     */
    public ?array $timestamps;
    /**
     * KnownSignerIdentity is an identifier for a special signer identity that is known to the implementation.
     *
     * @var KnownSignerIdentity
     */
    public KnownSignerIdentity $knownSigner;
    /**
     * DockerReference is the Docker image reference associated with the signature.
     * This is an optional field only present in older hashedrecord signatures.
     *
     * @var string|null
     */
    public ?string $dockerReference;
    /**
     * SignerIdentity contains information about the signer certificate used to sign the image.
     *
     * @var SignerIdentity
     */
    public SignerIdentity $signer;
    /**
     * SignatureType is the type of signature format.
     *
     * @var SignatureType
     */
    public SignatureType $signatureType;
    /**
     * Error contains error information if signature verification failed.
     * Other fields will be empty in this case.
     *
     * @var string|null
     */
    public ?string $error;
    /**
     * Warnings contains any warnings that occurred during signature verification.
     * For example, if there was no internet connectivity and cached trust roots were used.
     * Warning does not indicate a failed verification but may point to configuration issues.
     *
     * @var list<string>|null
     */
    public ?array $warnings;

    public function definedProperties(): array
    {
        return ['name' => 'Name', 'timestamps' => 'Timestamps', 'knownSigner' => 'KnownSigner', 'dockerReference' => 'DockerReference', 'signer' => 'Signer', 'signatureType' => 'SignatureType', 'error' => 'Error', 'warnings' => 'Warnings'];
    }
}
