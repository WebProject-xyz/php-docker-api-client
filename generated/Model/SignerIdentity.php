<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use function array_key_exists;

class SignerIdentity
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
     * CertificateIssuer is the certificate issuer.
     *
     * @var string|null
     */
    protected $certificateIssuer;
    /**
     * SubjectAlternativeName is the certificate subject alternative name.
     *
     * @var string|null
     */
    protected $subjectAlternativeName;
    /**
     * The OIDC issuer. Should match `iss` claim of ID token or, in the case of
     * a federated login like Dex it should match the issuer URL of the
     * upstream issuer. The issuer is not set the extensions are invalid and
     * will fail to render.
     *
     * @var string|null
     */
    protected $issuer;
    /**
     * Reference to specific build instructions that are responsible for signing.
     *
     * @var string|null
     */
    protected $buildSignerURI;
    /**
     * Immutable reference to the specific version of the build instructions that is responsible for signing.
     *
     * @var string|null
     */
    protected $buildSignerDigest;
    /**
     * Specifies whether the build took place in platform-hosted cloud infrastructure or customer/self-hosted infrastructure.
     *
     * @var string|null
     */
    protected $runnerEnvironment;
    /**
     * Source repository URL that the build was based on.
     *
     * @var string|null
     */
    protected $sourceRepositoryURI;
    /**
     * Immutable reference to a specific version of the source code that the build was based upon.
     *
     * @var string|null
     */
    protected $sourceRepositoryDigest;
    /**
     * Source Repository Ref that the build run was based upon.
     *
     * @var string|null
     */
    protected $sourceRepositoryRef;
    /**
     * Immutable identifier for the source repository the workflow was based upon.
     *
     * @var string|null
     */
    protected $sourceRepositoryIdentifier;
    /**
     * Source repository owner URL of the owner of the source repository that the build was based on.
     *
     * @var string|null
     */
    protected $sourceRepositoryOwnerURI;
    /**
     * Immutable identifier for the owner of the source repository that the workflow was based upon.
     *
     * @var string|null
     */
    protected $sourceRepositoryOwnerIdentifier;
    /**
     * Build Config URL to the top-level/initiating build instructions.
     *
     * @var string|null
     */
    protected $buildConfigURI;
    /**
     * Immutable reference to the specific version of the top-level/initiating build instructions.
     *
     * @var string|null
     */
    protected $buildConfigDigest;
    /**
     * Event or action that initiated the build.
     *
     * @var string|null
     */
    protected $buildTrigger;
    /**
     * Run Invocation URL to uniquely identify the build execution.
     *
     * @var string|null
     */
    protected $runInvocationURI;
    /**
     * Source repository visibility at the time of signing the certificate.
     *
     * @var string|null
     */
    protected $sourceRepositoryVisibilityAtSigning;

    /**
     * CertificateIssuer is the certificate issuer.
     *
     * @return string|null
     */
    public function getCertificateIssuer(): ?string
    {
        return $this->certificateIssuer;
    }

    /**
     * CertificateIssuer is the certificate issuer.
     *
     * @param string|null $certificateIssuer
     *
     * @return self
     */
    public function setCertificateIssuer(?string $certificateIssuer): self
    {
        $this->initialized['certificateIssuer'] = true;
        $this->certificateIssuer                = $certificateIssuer;

        return $this;
    }

    /**
     * SubjectAlternativeName is the certificate subject alternative name.
     *
     * @return string|null
     */
    public function getSubjectAlternativeName(): ?string
    {
        return $this->subjectAlternativeName;
    }

    /**
     * SubjectAlternativeName is the certificate subject alternative name.
     *
     * @param string|null $subjectAlternativeName
     *
     * @return self
     */
    public function setSubjectAlternativeName(?string $subjectAlternativeName): self
    {
        $this->initialized['subjectAlternativeName'] = true;
        $this->subjectAlternativeName                = $subjectAlternativeName;

        return $this;
    }

    /**
     * The OIDC issuer. Should match `iss` claim of ID token or, in the case of
     * a federated login like Dex it should match the issuer URL of the
     * upstream issuer. The issuer is not set the extensions are invalid and
     * will fail to render.
     *
     * @return string|null
     */
    public function getIssuer(): ?string
    {
        return $this->issuer;
    }

    /**
     * The OIDC issuer. Should match `iss` claim of ID token or, in the case of
     * a federated login like Dex it should match the issuer URL of the
     * upstream issuer. The issuer is not set the extensions are invalid and
     * will fail to render.
     *
     * @param string|null $issuer
     *
     * @return self
     */
    public function setIssuer(?string $issuer): self
    {
        $this->initialized['issuer'] = true;
        $this->issuer                = $issuer;

        return $this;
    }

    /**
     * Reference to specific build instructions that are responsible for signing.
     *
     * @return string|null
     */
    public function getBuildSignerURI(): ?string
    {
        return $this->buildSignerURI;
    }

    /**
     * Reference to specific build instructions that are responsible for signing.
     *
     * @param string|null $buildSignerURI
     *
     * @return self
     */
    public function setBuildSignerURI(?string $buildSignerURI): self
    {
        $this->initialized['buildSignerURI'] = true;
        $this->buildSignerURI                = $buildSignerURI;

        return $this;
    }

    /**
     * Immutable reference to the specific version of the build instructions that is responsible for signing.
     *
     * @return string|null
     */
    public function getBuildSignerDigest(): ?string
    {
        return $this->buildSignerDigest;
    }

    /**
     * Immutable reference to the specific version of the build instructions that is responsible for signing.
     *
     * @param string|null $buildSignerDigest
     *
     * @return self
     */
    public function setBuildSignerDigest(?string $buildSignerDigest): self
    {
        $this->initialized['buildSignerDigest'] = true;
        $this->buildSignerDigest                = $buildSignerDigest;

        return $this;
    }

    /**
     * Specifies whether the build took place in platform-hosted cloud infrastructure or customer/self-hosted infrastructure.
     *
     * @return string|null
     */
    public function getRunnerEnvironment(): ?string
    {
        return $this->runnerEnvironment;
    }

    /**
     * Specifies whether the build took place in platform-hosted cloud infrastructure or customer/self-hosted infrastructure.
     *
     * @param string|null $runnerEnvironment
     *
     * @return self
     */
    public function setRunnerEnvironment(?string $runnerEnvironment): self
    {
        $this->initialized['runnerEnvironment'] = true;
        $this->runnerEnvironment                = $runnerEnvironment;

        return $this;
    }

    /**
     * Source repository URL that the build was based on.
     *
     * @return string|null
     */
    public function getSourceRepositoryURI(): ?string
    {
        return $this->sourceRepositoryURI;
    }

    /**
     * Source repository URL that the build was based on.
     *
     * @param string|null $sourceRepositoryURI
     *
     * @return self
     */
    public function setSourceRepositoryURI(?string $sourceRepositoryURI): self
    {
        $this->initialized['sourceRepositoryURI'] = true;
        $this->sourceRepositoryURI                = $sourceRepositoryURI;

        return $this;
    }

    /**
     * Immutable reference to a specific version of the source code that the build was based upon.
     *
     * @return string|null
     */
    public function getSourceRepositoryDigest(): ?string
    {
        return $this->sourceRepositoryDigest;
    }

    /**
     * Immutable reference to a specific version of the source code that the build was based upon.
     *
     * @param string|null $sourceRepositoryDigest
     *
     * @return self
     */
    public function setSourceRepositoryDigest(?string $sourceRepositoryDigest): self
    {
        $this->initialized['sourceRepositoryDigest'] = true;
        $this->sourceRepositoryDigest                = $sourceRepositoryDigest;

        return $this;
    }

    /**
     * Source Repository Ref that the build run was based upon.
     *
     * @return string|null
     */
    public function getSourceRepositoryRef(): ?string
    {
        return $this->sourceRepositoryRef;
    }

    /**
     * Source Repository Ref that the build run was based upon.
     *
     * @param string|null $sourceRepositoryRef
     *
     * @return self
     */
    public function setSourceRepositoryRef(?string $sourceRepositoryRef): self
    {
        $this->initialized['sourceRepositoryRef'] = true;
        $this->sourceRepositoryRef                = $sourceRepositoryRef;

        return $this;
    }

    /**
     * Immutable identifier for the source repository the workflow was based upon.
     *
     * @return string|null
     */
    public function getSourceRepositoryIdentifier(): ?string
    {
        return $this->sourceRepositoryIdentifier;
    }

    /**
     * Immutable identifier for the source repository the workflow was based upon.
     *
     * @param string|null $sourceRepositoryIdentifier
     *
     * @return self
     */
    public function setSourceRepositoryIdentifier(?string $sourceRepositoryIdentifier): self
    {
        $this->initialized['sourceRepositoryIdentifier'] = true;
        $this->sourceRepositoryIdentifier                = $sourceRepositoryIdentifier;

        return $this;
    }

    /**
     * Source repository owner URL of the owner of the source repository that the build was based on.
     *
     * @return string|null
     */
    public function getSourceRepositoryOwnerURI(): ?string
    {
        return $this->sourceRepositoryOwnerURI;
    }

    /**
     * Source repository owner URL of the owner of the source repository that the build was based on.
     *
     * @param string|null $sourceRepositoryOwnerURI
     *
     * @return self
     */
    public function setSourceRepositoryOwnerURI(?string $sourceRepositoryOwnerURI): self
    {
        $this->initialized['sourceRepositoryOwnerURI'] = true;
        $this->sourceRepositoryOwnerURI                = $sourceRepositoryOwnerURI;

        return $this;
    }

    /**
     * Immutable identifier for the owner of the source repository that the workflow was based upon.
     *
     * @return string|null
     */
    public function getSourceRepositoryOwnerIdentifier(): ?string
    {
        return $this->sourceRepositoryOwnerIdentifier;
    }

    /**
     * Immutable identifier for the owner of the source repository that the workflow was based upon.
     *
     * @param string|null $sourceRepositoryOwnerIdentifier
     *
     * @return self
     */
    public function setSourceRepositoryOwnerIdentifier(?string $sourceRepositoryOwnerIdentifier): self
    {
        $this->initialized['sourceRepositoryOwnerIdentifier'] = true;
        $this->sourceRepositoryOwnerIdentifier                = $sourceRepositoryOwnerIdentifier;

        return $this;
    }

    /**
     * Build Config URL to the top-level/initiating build instructions.
     *
     * @return string|null
     */
    public function getBuildConfigURI(): ?string
    {
        return $this->buildConfigURI;
    }

    /**
     * Build Config URL to the top-level/initiating build instructions.
     *
     * @param string|null $buildConfigURI
     *
     * @return self
     */
    public function setBuildConfigURI(?string $buildConfigURI): self
    {
        $this->initialized['buildConfigURI'] = true;
        $this->buildConfigURI                = $buildConfigURI;

        return $this;
    }

    /**
     * Immutable reference to the specific version of the top-level/initiating build instructions.
     *
     * @return string|null
     */
    public function getBuildConfigDigest(): ?string
    {
        return $this->buildConfigDigest;
    }

    /**
     * Immutable reference to the specific version of the top-level/initiating build instructions.
     *
     * @param string|null $buildConfigDigest
     *
     * @return self
     */
    public function setBuildConfigDigest(?string $buildConfigDigest): self
    {
        $this->initialized['buildConfigDigest'] = true;
        $this->buildConfigDigest                = $buildConfigDigest;

        return $this;
    }

    /**
     * Event or action that initiated the build.
     *
     * @return string|null
     */
    public function getBuildTrigger(): ?string
    {
        return $this->buildTrigger;
    }

    /**
     * Event or action that initiated the build.
     *
     * @param string|null $buildTrigger
     *
     * @return self
     */
    public function setBuildTrigger(?string $buildTrigger): self
    {
        $this->initialized['buildTrigger'] = true;
        $this->buildTrigger                = $buildTrigger;

        return $this;
    }

    /**
     * Run Invocation URL to uniquely identify the build execution.
     *
     * @return string|null
     */
    public function getRunInvocationURI(): ?string
    {
        return $this->runInvocationURI;
    }

    /**
     * Run Invocation URL to uniquely identify the build execution.
     *
     * @param string|null $runInvocationURI
     *
     * @return self
     */
    public function setRunInvocationURI(?string $runInvocationURI): self
    {
        $this->initialized['runInvocationURI'] = true;
        $this->runInvocationURI                = $runInvocationURI;

        return $this;
    }

    /**
     * Source repository visibility at the time of signing the certificate.
     *
     * @return string|null
     */
    public function getSourceRepositoryVisibilityAtSigning(): ?string
    {
        return $this->sourceRepositoryVisibilityAtSigning;
    }

    /**
     * Source repository visibility at the time of signing the certificate.
     *
     * @param string|null $sourceRepositoryVisibilityAtSigning
     *
     * @return self
     */
    public function setSourceRepositoryVisibilityAtSigning(?string $sourceRepositoryVisibilityAtSigning): self
    {
        $this->initialized['sourceRepositoryVisibilityAtSigning'] = true;
        $this->sourceRepositoryVisibilityAtSigning                = $sourceRepositoryVisibilityAtSigning;

        return $this;
    }
}
