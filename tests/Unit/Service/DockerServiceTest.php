<?php

declare(strict_types=1);

namespace Tests\Unit\Service;

use Codeception\Test\Unit;
use PHPUnit\Framework\MockObject\MockObject;
use stdClass;
use WebProject\DockerApi\Library\Generated\Client;
use WebProject\DockerApi\Library\Generated\Model\ContainerConfig;
use WebProject\DockerApi\Library\Generated\Model\ContainerInspectResponse;
use WebProject\DockerApi\Library\Generated\Model\ContainerState;
use WebProject\DockerApi\Library\Generated\Model\ContainerSummary;
use WebProject\DockerApi\Library\Generated\Model\NetworkSettings;
use WebProject\DockerApiClient\Client\DockerApiClientWrapper;
use WebProject\DockerApiClient\Dto\DockerContainerDto;
use WebProject\DockerApiClient\Service\DockerService;

final class DockerServiceTest extends Unit
{
    private DockerApiClientWrapper $apiClientWrapper;
    private Client&MockObject $client;
    private DockerService $service;

    protected function _before(): void
    {
        $this->client           = $this->createMock(Client::class);
        $this->apiClientWrapper = new DockerApiClientWrapper('http://mocked-uri', '/mocked/socket', $this->client);
        $this->service          = new DockerService($this->apiClientWrapper);
    }

    public function testFindAllContainer(): void
    {
        $containerId = 'd013dcefb265f19ef734b4f51abe1db1db22861fa44b7a6f11613e2e8519519c';

        $containerSummary = $this->createMock(ContainerSummary::class);
        $containerSummary->method('getId')->willReturn($containerId);

        $this->client->expects($this->once())
            ->method('containerList')
            ->willReturn([$containerSummary]);

        $inspectResponse = $this->createConfiguredMock(ContainerInspectResponse::class, [
            'getId'              => $containerId,
            'getName'            => '/test-container',
            'getImage'           => 'nginx:latest',
            'getState'           => $this->createConfiguredMock(ContainerState::class, ['getRunning' => true]),
            'getConfig'          => $this->createConfiguredMock(ContainerConfig::class, ['getEnv' => ['FOO=bar']]),
            'getNetworkSettings' => $this->createConfiguredMock(NetworkSettings::class, ['getNetworks' => [], 'getPorts' => []]),
        ]);

        $this->client->expects($this->once())
            ->method('containerInspect')
            ->with($containerId)
            ->willReturn($inspectResponse);

        $result = $this->service->findAllContainer();
        $dtos   = iterator_to_array($result);

        $this->assertCount(1, $dtos);
        $this->assertArrayHasKey($containerId, $dtos);
        $this->assertInstanceOf(DockerContainerDto::class, $dtos[$containerId]);
        $this->assertSame($containerId, $dtos[$containerId]->id);
        $this->assertSame('test-container', $dtos[$containerId]->getName());
    }

    public function testFindContainer(): void
    {
        $inspectResponse = $this->createConfiguredMock(ContainerInspectResponse::class, [
            'getId'              => '456',
            'getName'            => '/single-container',
            'getImage'           => 'php:8.3',
            'getState'           => $this->createConfiguredMock(ContainerState::class, ['getRunning' => false]),
            'getConfig'          => $this->createConfiguredMock(ContainerConfig::class, ['getEnv' => []]),
            'getNetworkSettings' => $this->createConfiguredMock(NetworkSettings::class, ['getNetworks' => [], 'getPorts' => []]),
        ]);

        $this->client->expects($this->once())
            ->method('containerInspect')
            ->with('456')
            ->willReturn($inspectResponse);

        $dto = $this->service->findContainer('456');

        $this->assertInstanceOf(DockerContainerDto::class, $dto);
        $this->assertSame('456', $dto->id);
    }

    public function testFindContainerNotFound(): void
    {
        $this->client->expects($this->once())
            ->method('containerInspect')
            ->with('999')
            ->willReturn(new stdClass());

        $dto = $this->service->findContainer('999');

        $this->assertNull($dto);
    }
}
