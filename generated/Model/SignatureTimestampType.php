<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

enum SignatureTimestampType: string
{
    case Tlog               = 'Tlog';
    case Timestampauthority = 'TimestampAuthority';
}
