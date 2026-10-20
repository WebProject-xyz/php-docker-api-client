<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

enum TaskState: string
{
    case New       = 'new';
    case Allocated = 'allocated';
    case Pending   = 'pending';
    case Assigned  = 'assigned';
    case Accepted  = 'accepted';
    case Preparing = 'preparing';
    case Ready     = 'ready';
    case Starting  = 'starting';
    case Running   = 'running';
    case Complete  = 'complete';
    case Shutdown  = 'shutdown';
    case Failed    = 'failed';
    case Rejected  = 'rejected';
    case Remove    = 'remove';
    case Orphaned  = 'orphaned';
}
