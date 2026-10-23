<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

enum MountType: string
{
    case Bind    = 'bind';
    case Cluster = 'cluster';
    case Image   = 'image';
    case Npipe   = 'npipe';
    case Tmpfs   = 'tmpfs';
    case Volume  = 'volume';
}
