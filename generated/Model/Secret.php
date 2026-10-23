<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use DateTimeInterface;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class Secret implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string|null
     */
    public ?string $iD;
    /**
     * The version number of the object such as node, service, etc. This is needed
     * to avoid conflicting writes. The client must send the version number along
     * with the modified specification when updating these objects.
     *
     * This approach ensures safe concurrency and determinism in that the change
     * on the object may not be applied if the version number has changed from the
     * last read. In other words, if two update requests specify the same base
     * version, only one of the requests can succeed. As a result, two separate
     * update requests that happen at the same time will not unintentionally
     * overwrite each other.
     *
     * @var ObjectVersion
     */
    public ObjectVersion $version;
    /**
     * @var DateTimeInterface|null
     */
    public ?DateTimeInterface $createdAt;
    /**
     * @var DateTimeInterface|null
     */
    public ?DateTimeInterface $updatedAt;
    /**
     * @var SecretSpec
     */
    public SecretSpec $spec;

    public function definedProperties(): array
    {
        return ['iD' => 'ID', 'version' => 'Version', 'createdAt' => 'CreatedAt', 'updatedAt' => 'UpdatedAt', 'spec' => 'Spec'];
    }
}
