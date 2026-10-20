<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

enum ClusterVolumeSpecAccessModeAvailability: string
{
    case Active = 'active';
    case Pause  = 'pause';
    case Drain  = 'drain';
}
