<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

enum ClusterVolumeSpecAccessModeSharing: string
{
    case None      = 'none';
    case Readonly  = 'readonly';
    case Onewriter = 'onewriter';
    case All       = 'all';
}
