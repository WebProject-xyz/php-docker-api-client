<?php

declare(strict_types=1);

namespace WebProject\DockerApiClient\Tests\Unit\Service;

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

        $containerSummary     = new ContainerSummary();
        $containerSummary->id = $containerId;

        $this->client->expects($this->once())
            ->method('containerList')
            ->willReturn([$containerSummary]);

        $state          = new ContainerState();
        $state->running = true;

        $config      = new ContainerConfig();
        $config->env = ['FOO=bar'];

        $networkSettings           = new NetworkSettings();
        $networkSettings->networks = [];
        $networkSettings->ports    = [];

        $inspectResponse                  = new ContainerInspectResponse();
        $inspectResponse->id              = $containerId;
        $inspectResponse->name            = '/test-container';
        $inspectResponse->image           = 'nginx:latest';
        $inspectResponse->state           = $state;
        $inspectResponse->config          = $config;
        $inspectResponse->networkSettings = $networkSettings;

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
        $state          = new ContainerState();
        $state->running = false;

        $config      = new ContainerConfig();
        $config->env = [];

        $networkSettings           = new NetworkSettings();
        $networkSettings->networks = [];
        $networkSettings->ports    = [];

        $inspectResponse                  = new ContainerInspectResponse();
        $inspectResponse->id              = '456';
        $inspectResponse->name            = '/single-container';
        $inspectResponse->image           = 'php:8.3';
        $inspectResponse->state           = $state;
        $inspectResponse->config          = $config;
        $inspectResponse->networkSettings = $networkSettings;

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
