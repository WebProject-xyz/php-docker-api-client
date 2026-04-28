<?php

declare(strict_types=1);

namespace WebProject\DockerApiClient\Util;

use WebProject\DockerApi\Library\Generated\Model\ContainerInspectResponse;
use WebProject\DockerApiClient\Dto\DockerContainerDto;
use function array_unique;
use function array_values;
use function explode;

final readonly class ContainerResponseToContainerDtoUtil
{
    public function __invoke(
        ContainerInspectResponse $containerInspect,
    ): DockerContainerDto {
        $ipAddresses = [];
        $networks    = [];

        $networkSettings = $containerInspect->getNetworkSettings();
        foreach ($networkSettings->getNetworks() as $networkName => $network) {
            $ip = $network->getIPAddress();
            if (null === $ip || '' === $ip) {
                continue;
            }
            $networks[$networkName]['aliases'] = array_values(array_unique($network->getAliases() ?? []));
            $networks[$networkName]['ip']      = $ip;
            $ipAddresses[]                     = $ip;
        }

        $envVariables = [];
        $config       = $containerInspect->getConfig();
        foreach ($config->getEnv() ?? [] as $envVar) {
            if (!str_contains($envVar, '=')) {
                continue;
            }
            [$name, $value]      = explode('=', $envVar, 2);
            $envVariables[$name] = $value;
        }

        $ports = [];
        foreach ($networkSettings->getPorts() ?? [] as $portKey => $portBindings) {
            if (empty($portBindings)) {
                continue;
            }
            // PortBinding is expected by DTO for each string key
            $ports[$portKey] = $portBindings[0];
        }

        return new DockerContainerDto(
            id: (string) $containerInspect->getId(),
            name: (string) $containerInspect->getName(),
            image: (string) $containerInspect->getImage(),
            running: $containerInspect->getState()?->getRunning() ?? false,
            envVariables: $envVariables,
            ipAddresses: $ipAddresses,
            networks: $networks,
            ports: $ports,
        );
    }
}
