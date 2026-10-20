<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

enum Reachability: string
{
    case Unknown     = 'unknown';
    case Unreachable = 'unreachable';
    case Reachable   = 'reachable';
}
