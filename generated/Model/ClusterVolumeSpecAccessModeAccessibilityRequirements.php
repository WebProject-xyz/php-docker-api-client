<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ClusterVolumeSpecAccessModeAccessibilityRequirements implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A list of required topologies, at least one of which the
     * volume must be accessible from.
     *
     * @var list<Topology>|null
     */
    public ?array $requisite;
    /**
     * A list of topologies that the volume should attempt to be
     * provisioned in.
     *
     * @var list<Topology>|null
     */
    public ?array $preferred;

    public function definedProperties(): array
    {
        return ['requisite' => 'Requisite', 'preferred' => 'Preferred'];
    }
}
