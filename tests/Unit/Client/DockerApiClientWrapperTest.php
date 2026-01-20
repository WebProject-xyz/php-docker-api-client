<?php

declare(strict_types=1);

namespace Tests\Unit\Client;

use Codeception\Test\Unit;
use WebProject\DockerApi\Library\Generated\Client;
use WebProject\DockerApiClient\Client\DockerApiClientWrapper;

final class DockerApiClientWrapperTest extends Unit
{
    public function testGetDockerClient(): void
    {
        $mockClient = $this->createMock(Client::class);
        $wrapper = new DockerApiClientWrapper('http://localhost', '/var/run/docker.sock', $mockClient);

        $this->assertSame($mockClient, $wrapper->getDockerClient());
    }

    public function testCreate(): void
    {
        $wrapper = DockerApiClientWrapper::create('http://localhost', '/var/run/docker.sock');
        $this->assertInstanceOf(DockerApiClientWrapper::class, $wrapper);
        $this->assertInstanceOf(Client::class, $wrapper->getDockerClient());
    }
}
