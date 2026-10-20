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

        $networkSettings = $containerInspect->networkSettings;
        foreach ($networkSettings->networks as $networkName => $network) {
            $ip = $network->iPAddress;
            if (null === $ip || '' === $ip) {
                continue;
            }
            $networks[$networkName]['aliases'] = array_values(array_unique($network->aliases ?? []));
            $networks[$networkName]['ip']      = $ip;
            $ipAddresses[]                     = $ip;
        }

        $envVariables = [];
        $config       = $containerInspect->config;
        foreach ($config->env ?? [] as $envVar) {
            if (!str_contains($envVar, '=')) {
                continue;
            }
            [$name, $value]      = explode('=', $envVar, 2);
            $envVariables[$name] = $value;
        }

        $ports = [];
        foreach ($networkSettings->ports ?? [] as $portKey => $portBindings) {
            if (empty($portBindings)) {
                // PortBindung without host binding
                $ports[$portKey] = new \WebProject\DockerApi\Library\Generated\Model\PortBinding();
                continue;
            }
            // PortBinding is expected by DTO for each string key
            $ports[$portKey] = $portBindings[0];
        }

        return new DockerContainerDto(
            id: (string) $containerInspect->id,
            name: (string) $containerInspect->name,
            image: (string) $containerInspect->image,
            running: $containerInspect->state->running ?? false,
            envVariables: $envVariables,
            ipAddresses: $ipAddresses,
            networks: $networks,
            ports: $ports,
        );
    }
}
