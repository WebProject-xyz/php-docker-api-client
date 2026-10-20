<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

enum LocalNodeState: string
{
    case Value    = '';
    case Inactive = 'inactive';
    case Pending  = 'pending';
    case Active   = 'active';
    case Error    = 'error';
    case Locked   = 'locked';
}
