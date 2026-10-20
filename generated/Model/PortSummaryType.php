<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

enum PortSummaryType: string
{
    case Tcp  = 'tcp';
    case Udp  = 'udp';
    case Sctp = 'sctp';
}
