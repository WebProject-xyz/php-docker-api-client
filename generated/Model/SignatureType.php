<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

enum SignatureType: string
{
    case BundleV03       = 'bundle-v0.3';
    case SimplesigningV1 = 'simplesigning-v1';
}
