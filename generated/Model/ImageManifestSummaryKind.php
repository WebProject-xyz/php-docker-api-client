<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

enum ImageManifestSummaryKind: string
{
    case Image       = 'image';
    case Attestation = 'attestation';
    case Unknown     = 'unknown';
}
