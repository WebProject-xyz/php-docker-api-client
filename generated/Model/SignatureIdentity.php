<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use function array_key_exists;

class SignatureIdentity
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
     * Name is a textual description summarizing the type of signature.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Timestamps contains a list of verified signed timestamps for the signature.
     *
     * @var list<SignatureTimestamp>|null
     */
    protected $timestamps;
    /**
     * KnownSignerIdentity is an identifier for a special signer identity that is known to the implementation.
     *
     * @var string
     */
    protected $knownSigner;
    /**
     * DockerReference is the Docker image reference associated with the signature.
     * This is an optional field only present in older hashedrecord signatures.
     *
     * @var string|null
     */
    protected $dockerReference;
    /**
     * SignerIdentity contains information about the signer certificate used to sign the image.
     *
     * @var SignerIdentity
     */
    protected $signer;
    /**
     * SignatureType is the type of signature format.
     *
     * @var string
     */
    protected $signatureType;
    /**
     * Error contains error information if signature verification failed.
     * Other fields will be empty in this case.
     *
     * @var string|null
     */
    protected $error;
    /**
     * Warnings contains any warnings that occurred during signature verification.
     * For example, if there was no internet connectivity and cached trust roots were used.
     * Warning does not indicate a failed verification but may point to configuration issues.
     *
     * @var list<string>|null
     */
    protected $warnings;

    /**
     * Name is a textual description summarizing the type of signature.
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Name is a textual description summarizing the type of signature.
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name                = $name;

        return $this;
    }

    /**
     * Timestamps contains a list of verified signed timestamps for the signature.
     *
     * @return list<SignatureTimestamp>|null
     */
    public function getTimestamps(): ?array
    {
        return $this->timestamps;
    }

    /**
     * Timestamps contains a list of verified signed timestamps for the signature.
     *
     * @param list<SignatureTimestamp>|null $timestamps
     *
     * @return self
     */
    public function setTimestamps(?array $timestamps): self
    {
        $this->initialized['timestamps'] = true;
        $this->timestamps                = $timestamps;

        return $this;
    }

    /**
     * KnownSignerIdentity is an identifier for a special signer identity that is known to the implementation.
     *
     * @return string
     */
    public function getKnownSigner(): string
    {
        return $this->knownSigner;
    }

    /**
     * KnownSignerIdentity is an identifier for a special signer identity that is known to the implementation.
     *
     * @param string $knownSigner
     *
     * @return self
     */
    public function setKnownSigner(string $knownSigner): self
    {
        $this->initialized['knownSigner'] = true;
        $this->knownSigner                = $knownSigner;

        return $this;
    }

    /**
     * DockerReference is the Docker image reference associated with the signature.
     * This is an optional field only present in older hashedrecord signatures.
     *
     * @return string|null
     */
    public function getDockerReference(): ?string
    {
        return $this->dockerReference;
    }

    /**
     * DockerReference is the Docker image reference associated with the signature.
     * This is an optional field only present in older hashedrecord signatures.
     *
     * @param string|null $dockerReference
     *
     * @return self
     */
    public function setDockerReference(?string $dockerReference): self
    {
        $this->initialized['dockerReference'] = true;
        $this->dockerReference                = $dockerReference;

        return $this;
    }

    /**
     * SignerIdentity contains information about the signer certificate used to sign the image.
     *
     * @return SignerIdentity
     */
    public function getSigner(): SignerIdentity
    {
        return $this->signer;
    }

    /**
     * SignerIdentity contains information about the signer certificate used to sign the image.
     *
     * @param SignerIdentity $signer
     *
     * @return self
     */
    public function setSigner(SignerIdentity $signer): self
    {
        $this->initialized['signer'] = true;
        $this->signer                = $signer;

        return $this;
    }

    /**
     * SignatureType is the type of signature format.
     *
     * @return string
     */
    public function getSignatureType(): string
    {
        return $this->signatureType;
    }

    /**
     * SignatureType is the type of signature format.
     *
     * @param string $signatureType
     *
     * @return self
     */
    public function setSignatureType(string $signatureType): self
    {
        $this->initialized['signatureType'] = true;
        $this->signatureType                = $signatureType;

        return $this;
    }

    /**
     * Error contains error information if signature verification failed.
     * Other fields will be empty in this case.
     *
     * @return string|null
     */
    public function getError(): ?string
    {
        return $this->error;
    }

    /**
     * Error contains error information if signature verification failed.
     * Other fields will be empty in this case.
     *
     * @param string|null $error
     *
     * @return self
     */
    public function setError(?string $error): self
    {
        $this->initialized['error'] = true;
        $this->error                = $error;

        return $this;
    }

    /**
     * Warnings contains any warnings that occurred during signature verification.
     * For example, if there was no internet connectivity and cached trust roots were used.
     * Warning does not indicate a failed verification but may point to configuration issues.
     *
     * @return list<string>|null
     */
    public function getWarnings(): ?array
    {
        return $this->warnings;
    }

    /**
     * Warnings contains any warnings that occurred during signature verification.
     * For example, if there was no internet connectivity and cached trust roots were used.
     * Warning does not indicate a failed verification but may point to configuration issues.
     *
     * @param list<string>|null $warnings
     *
     * @return self
     */
    public function setWarnings(?array $warnings): self
    {
        $this->initialized['warnings'] = true;
        $this->warnings                = $warnings;

        return $this;
    }
}
