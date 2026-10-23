<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class SignerIdentity implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * CertificateIssuer is the certificate issuer.
     *
     * @var string|null
     */
    public ?string $certificateIssuer;
    /**
     * SubjectAlternativeName is the certificate subject alternative name.
     *
     * @var string|null
     */
    public ?string $subjectAlternativeName;
    /**
     * The OIDC issuer. Should match `iss` claim of ID token or, in the case of
     * a federated login like Dex it should match the issuer URL of the
     * upstream issuer. The issuer is not set the extensions are invalid and
     * will fail to render.
     *
     * @var string|null
     */
    public ?string $issuer;
    /**
     * Reference to specific build instructions that are responsible for signing.
     *
     * @var string|null
     */
    public ?string $buildSignerURI;
    /**
     * Immutable reference to the specific version of the build instructions that is responsible for signing.
     *
     * @var string|null
     */
    public ?string $buildSignerDigest;
    /**
     * Specifies whether the build took place in platform-hosted cloud infrastructure or customer/self-hosted infrastructure.
     *
     * @var string|null
     */
    public ?string $runnerEnvironment;
    /**
     * Source repository URL that the build was based on.
     *
     * @var string|null
     */
    public ?string $sourceRepositoryURI;
    /**
     * Immutable reference to a specific version of the source code that the build was based upon.
     *
     * @var string|null
     */
    public ?string $sourceRepositoryDigest;
    /**
     * Source Repository Ref that the build run was based upon.
     *
     * @var string|null
     */
    public ?string $sourceRepositoryRef;
    /**
     * Immutable identifier for the source repository the workflow was based upon.
     *
     * @var string|null
     */
    public ?string $sourceRepositoryIdentifier;
    /**
     * Source repository owner URL of the owner of the source repository that the build was based on.
     *
     * @var string|null
     */
    public ?string $sourceRepositoryOwnerURI;
    /**
     * Immutable identifier for the owner of the source repository that the workflow was based upon.
     *
     * @var string|null
     */
    public ?string $sourceRepositoryOwnerIdentifier;
    /**
     * Build Config URL to the top-level/initiating build instructions.
     *
     * @var string|null
     */
    public ?string $buildConfigURI;
    /**
     * Immutable reference to the specific version of the top-level/initiating build instructions.
     *
     * @var string|null
     */
    public ?string $buildConfigDigest;
    /**
     * Event or action that initiated the build.
     *
     * @var string|null
     */
    public ?string $buildTrigger;
    /**
     * Run Invocation URL to uniquely identify the build execution.
     *
     * @var string|null
     */
    public ?string $runInvocationURI;
    /**
     * Source repository visibility at the time of signing the certificate.
     *
     * @var string|null
     */
    public ?string $sourceRepositoryVisibilityAtSigning;

    public function definedProperties(): array
    {
        return ['certificateIssuer' => 'CertificateIssuer', 'subjectAlternativeName' => 'SubjectAlternativeName', 'issuer' => 'Issuer', 'buildSignerURI' => 'BuildSignerURI', 'buildSignerDigest' => 'BuildSignerDigest', 'runnerEnvironment' => 'RunnerEnvironment', 'sourceRepositoryURI' => 'SourceRepositoryURI', 'sourceRepositoryDigest' => 'SourceRepositoryDigest', 'sourceRepositoryRef' => 'SourceRepositoryRef', 'sourceRepositoryIdentifier' => 'SourceRepositoryIdentifier', 'sourceRepositoryOwnerURI' => 'SourceRepositoryOwnerURI', 'sourceRepositoryOwnerIdentifier' => 'SourceRepositoryOwnerIdentifier', 'buildConfigURI' => 'BuildConfigURI', 'buildConfigDigest' => 'BuildConfigDigest', 'buildTrigger' => 'BuildTrigger', 'runInvocationURI' => 'RunInvocationURI', 'sourceRepositoryVisibilityAtSigning' => 'SourceRepositoryVisibilityAtSigning'];
    }
}
