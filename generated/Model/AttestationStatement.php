<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use function array_key_exists;

class AttestationStatement
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
     * A descriptor struct containing digest, media type, and size, as defined in
     * the [OCI Content Descriptors Specification](https://github.com/opencontainers/image-spec/blob/v1.0.1/descriptor.md).
     *
     * @var OCIDescriptor
     */
    protected $descriptor;
    /**
     * The in-toto predicate type URI of this statement.
     *
     * @var string
     */
    protected $predicateType;
    /**
     * The verbatim in-toto statement JSON. Only included when the caller
     * opts in via the `statement=true` query parameter; otherwise absent.
     *
     * @var mixed|null
     */
    protected $statement;

    /**
     * A descriptor struct containing digest, media type, and size, as defined in
     * the [OCI Content Descriptors Specification](https://github.com/opencontainers/image-spec/blob/v1.0.1/descriptor.md).
     *
     * @return OCIDescriptor
     */
    public function getDescriptor(): OCIDescriptor
    {
        return $this->descriptor;
    }

    /**
     * A descriptor struct containing digest, media type, and size, as defined in
     * the [OCI Content Descriptors Specification](https://github.com/opencontainers/image-spec/blob/v1.0.1/descriptor.md).
     *
     * @param OCIDescriptor $descriptor
     *
     * @return self
     */
    public function setDescriptor(OCIDescriptor $descriptor): self
    {
        $this->initialized['descriptor'] = true;
        $this->descriptor                = $descriptor;

        return $this;
    }

    /**
     * The in-toto predicate type URI of this statement.
     *
     * @return string
     */
    public function getPredicateType(): string
    {
        return $this->predicateType;
    }

    /**
     * The in-toto predicate type URI of this statement.
     *
     * @param string $predicateType
     *
     * @return self
     */
    public function setPredicateType(string $predicateType): self
    {
        $this->initialized['predicateType'] = true;
        $this->predicateType                = $predicateType;

        return $this;
    }

    /**
     * The verbatim in-toto statement JSON. Only included when the caller
     * opts in via the `statement=true` query parameter; otherwise absent.
     *
     * @return mixed|null
     */
    public function getStatement()
    {
        return $this->statement;
    }

    /**
     * The verbatim in-toto statement JSON. Only included when the caller
     * opts in via the `statement=true` query parameter; otherwise absent.
     *
     * @param mixed|null $statement
     *
     * @return self
     */
    public function setStatement($statement): self
    {
        $this->initialized['statement'] = true;
        $this->statement                = $statement;

        return $this;
    }
}
