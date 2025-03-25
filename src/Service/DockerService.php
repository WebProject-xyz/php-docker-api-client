<?php

declare(strict_types=1);

namespace WebProject\DockerApiClient\Service;

use WebProject\DockerApi\Library\Generated\Model\ContainerInspectResponse;
use WebProject\DockerApiClient\Client\DockerApiClientWrapper;
use WebProject\DockerApiClient\Dto\DockerContainerDto;
use WebProject\DockerApiClient\Event\ContainerEvent;
use WebProject\DockerApiClient\Util\ContainerResponseToContainerDtoUtil;

final readonly class DockerService
{
    public function __construct(
        private DockerApiClientWrapper $dockerApiClient,
    ) {
    }

    /**
     * @return iterable<string, DockerContainerDto>
     */
    public function findAllContainer(): iterable
    {
        $util = new ContainerResponseToContainerDtoUtil();

        foreach ($this->dockerApiClient->getDockerClient()->containerList() as $container) {
            $id               = $container->getId();
            $containerInspect = $this->dockerApiClient->getDockerClient()->containerInspect($id);

            if (!$containerInspect instanceof ContainerInspectResponse) {
                continue;
            }

            yield $id => $util($containerInspect);
        }
    }

    public function findContainer(string $id): ?DockerContainerDto
    {
        $containerInspect = $this->dockerApiClient->getDockerClient()->containerInspect($id);

        if (!$containerInspect instanceof ContainerInspectResponse) {
            return null;
        }

        return (new ContainerResponseToContainerDtoUtil())($containerInspect);
    }

    /**
     * @phpstan-param callable(ContainerEvent $event):void $eventCallback
     */
    public function listenForEvents(callable $eventCallback): true
    {
        return $this->dockerApiClient->listenForEvents($eventCallback);
    }
}
