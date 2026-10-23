<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class AttestationStatement implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A descriptor struct containing digest, media type, and size, as defined in
     * the [OCI Content Descriptors Specification](https://github.com/opencontainers/image-spec/blob/v1.0.1/descriptor.md).
     *
     * @var OCIDescriptor
     */
    public OCIDescriptor $descriptor;
    /**
     * The in-toto predicate type URI of this statement.
     *
     * @var string
     */
    public string $predicateType;
    /**
     * The verbatim in-toto statement JSON. Only included when the caller
     * opts in via the `statement=true` query parameter; otherwise absent.
     *
     * @var mixed|null
     */
    public $statement;

    public function definedProperties(): array
    {
        return ['descriptor' => 'Descriptor', 'predicateType' => 'PredicateType', 'statement' => 'Statement'];
    }
}
