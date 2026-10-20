<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

enum NodeState: string
{
    case Unknown      = 'unknown';
    case Down         = 'down';
    case Ready        = 'ready';
    case Disconnected = 'disconnected';
}
