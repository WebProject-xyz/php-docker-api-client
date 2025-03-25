<?php

declare(strict_types=1);

namespace WebProject\DockerApiClient\Tests;

use PHPUnit\Framework\Attributes\CoversClass;
use WebProject\DockerApi\Library\Generated\Model\EndpointSettings;
use WebProject\DockerApiClient\Util\ContainerResponseToContainerDtoUtil;

#[CoversClass(className: ContainerResponseToContainerDtoUtil::class)]
class ContainerResponseToContainerDtoUtilTest extends \Codeception\Test\Unit
{
    public function testInvokeMinValues(): void
    {
        // Arrange
        $containerInspectResponse = new \WebProject\DockerApi\Library\Generated\Model\ContainerInspectResponse();
        $containerInspectResponse->setId(id: 'container-idValue');
        $containerInspectResponse->setImage(image: 'container-imageValue');
        $containerInspectResponse->setName(name: '/container-name');

        $networkSettings = new \WebProject\DockerApi\Library\Generated\Model\NetworkSettings();
        $networkSettings->setNetworks(networks: []);
        $containerInspectResponse->setNetworkSettings(networkSettings: $networkSettings);

        $containerConfig = new \WebProject\DockerApi\Library\Generated\Model\ContainerConfig();
        $containerInspectResponse->setConfig(config: $containerConfig);

        // Act
        $containerDto = (new ContainerResponseToContainerDtoUtil())(containerInspect: $containerInspectResponse);

        // Assert
        $this->assertSame(expected: 'container-idValue', actual: $containerDto->id);
        $this->assertSame(expected: 'container-imageValue', actual: $containerDto->image);
        $this->assertSame(expected: [], actual: $containerDto->ipAddresses);
        $this->assertSame(expected: [], actual: $containerDto->networks);
        $this->assertFalse($containerDto->running);
        $this->assertSame(expected: 'container-name', actual: $containerDto->getName());
        $this->assertSame(expected: ['container-name'], actual: $containerDto->getHostnames(tld: ''));
    }

    public function testInvokeMaxValues(): void
    {
        // Arrange
        $containerInspectResponse = new \WebProject\DockerApi\Library\Generated\Model\ContainerInspectResponse();
        $containerInspectResponse->setId(id: 'container-idValue');
        $containerInspectResponse->setImage(image: 'container-imageValue');
        $containerInspectResponse->setName(name: '/container-name');

        $endpoint = new EndpointSettings();
        $endpoint->setIPAddress('192.12.12.12');
        $endpoint->setAliases(['e1-alias1']);

        $endpoint2 = new EndpointSettings();
        $endpoint2->setIPAddress('123.12.12.12');
        $endpoint2->setAliases(['e2-alias1', 'e2-alias2']);

        $networkSettings = new \WebProject\DockerApi\Library\Generated\Model\NetworkSettings();
        $networkSettings->setNetworks(networks: [$endpoint, $endpoint2]);

        $containerInspectResponse->setNetworkSettings(networkSettings: $networkSettings);

        $containerConfig = new \WebProject\DockerApi\Library\Generated\Model\ContainerConfig();
        $containerConfig->setEnv(
            [
                // expect this
                'VIRTUAL_HOST=actual.reverse-proxy-subdomain.xyz',
                'DOMAIN_NAME=domain-name.reverse-proxy-subdomain.xyz',

                'VIRTUAL_PORT=5006',
                'WEB_PORTS=443',
                'PATH=/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin',
                'NODE_VERSION=18.19.1',
                'YARN_VERSION=1.22.19',
            ]
        );

        $containerInspectResponse->setConfig(config: $containerConfig);

        // Act
        $containerDto = (new ContainerResponseToContainerDtoUtil())(containerInspect: $containerInspectResponse);

        // Assert
        $this->assertSame(expected: 'container-idValue', actual: $containerDto->id);
        $this->assertSame(expected: 'container-imageValue', actual: $containerDto->image);
        $this->assertSame(expected: ['192.12.12.12', '123.12.12.12'], actual: $containerDto->ipAddresses);

        $expectedNetworks = [
            0 => [
                'aliases' => [
                    0 => 'e1-alias1',
                ],
                'ip' => '192.12.12.12',
            ],
            1 => [
                'aliases' => [
                    0 => 'e2-alias1',
                    1 => 'e2-alias2',
                ],
                'ip' => '123.12.12.12',
            ],
        ];
        $this->assertSame(expected: $expectedNetworks, actual: $containerDto->networks);
        $this->assertFalse($containerDto->running);
        $this->assertSame(expected: 'container-name', actual: $containerDto->getName());
        $this->assertSame(expected: ['container-name'], actual: $containerDto->getHostnames(tld: ''));
        $this->assertSame(
            expected: ['actual.reverse-proxy-subdomain.xyz', 'domain-name.reverse-proxy-subdomain.xyz'],
            actual: $containerDto->extractUrlsFromEnvVars(extractFromEnvVars: ['DOMAIN_NAME', 'VIRTUAL_HOST'])
        );
    }
}
