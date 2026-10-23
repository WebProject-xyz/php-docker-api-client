<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

enum VolumeScope: string
{
    case Local  = 'local';
    case Global = 'global';
}
