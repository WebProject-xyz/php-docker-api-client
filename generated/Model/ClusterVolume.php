<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use DateTimeInterface;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ClusterVolume implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The Swarm ID of this volume. Because cluster volumes are Swarm
     * objects, they have an ID, unlike non-cluster volumes. This ID can
     * be used to refer to the Volume instead of the name.
     *
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
     * Cluster-specific options used to create the volume.
     *
     * @var ClusterVolumeSpec
     */
    public ClusterVolumeSpec $spec;
    /**
     * Information about the global status of the volume.
     *
     * @var ClusterVolumeInfo|null
     */
    public ?ClusterVolumeInfo $info;
    /**
     * The status of the volume as it pertains to its publishing and use on
     * specific nodes.
     *
     * @var list<ClusterVolumePublishStatusItem>|null
     */
    public ?array $publishStatus;

    public function definedProperties(): array
    {
        return ['iD' => 'ID', 'version' => 'Version', 'createdAt' => 'CreatedAt', 'updatedAt' => 'UpdatedAt', 'spec' => 'Spec', 'info' => 'Info', 'publishStatus' => 'PublishStatus'];
    }
}
