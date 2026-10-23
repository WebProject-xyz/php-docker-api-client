<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

enum ClusterVolumeSpecAccessModeScope: string
{
    case Single = 'single';
    case Multi  = 'multi';
}
