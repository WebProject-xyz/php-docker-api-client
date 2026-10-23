<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class Runtime implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Name and, optional, path, of the OCI executable binary.
     *
     * If the path is omitted, the daemon searches the host's `$PATH` for the
     * binary and uses the first result.
     *
     * @var string|null
     */
    public ?string $path;
    /**
     * List of command-line arguments to pass to the runtime when invoked.
     *
     * @var list<string>|null
     */
    public ?array $runtimeArgs;
    /**
     * Information specific to the runtime.
     *
     * While this API specification does not define data provided by runtimes,
     * the following well-known properties may be provided by runtimes:
     *
     * `org.opencontainers.runtime-spec.features`: features structure as defined
     * in the [OCI Runtime Specification](https://github.com/opencontainers/runtime-spec/blob/main/features.md),
     * in a JSON string representation.
     *
     * <p><br /></p>
     *
     * > **Note**: The information returned in this field, including the
     * > formatting of values and labels, should not be considered stable,
     * > and may change without notice.
     *
     * @var iterable<string, string>|null
     */
    public ?iterable $status;

    public function definedProperties(): array
    {
        return ['path' => 'path', 'runtimeArgs' => 'runtimeArgs', 'status' => 'status'];
    }
}
