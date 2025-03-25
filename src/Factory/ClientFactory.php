<?php

declare(strict_types=1);

namespace WebProject\DockerApiClient\Factory;

use WebProject\DockerApiClient\Client\DockerApiClientWrapper;

final class ClientFactory
{
    private function __construct()
    {
    }

    public static function create(
        string $baseUri = 'http://docker',
        string $socketPath = '/var/run/docker.sock',
        ?int $timeout = null,
    ): DockerApiClientWrapper {
        return DockerApiClientWrapper::create(
            baseUri: $baseUri,
            socketPath: $socketPath,
            timeout: $timeout,
        );
    }
}
