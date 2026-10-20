<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class SystemDfGetTextplainResponse200 implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * represents system data usage for image resources.
     *
     * @var ImagesDiskUsage
     */
    public ImagesDiskUsage $imageUsage;
    /**
     * represents system data usage information for container resources.
     *
     * @var ContainersDiskUsage
     */
    public ContainersDiskUsage $containerUsage;
    /**
     * represents system data usage for volume resources.
     *
     * @var VolumesDiskUsage
     */
    public VolumesDiskUsage $volumeUsage;
    /**
     * represents system data usage for build cache resources.
     *
     * @var BuildCacheDiskUsage
     */
    public BuildCacheDiskUsage $buildCacheUsage;

    public function definedProperties(): array
    {
        return ['imageUsage' => 'ImageUsage', 'containerUsage' => 'ContainerUsage', 'volumeUsage' => 'VolumeUsage', 'buildCacheUsage' => 'BuildCacheUsage'];
    }
}
