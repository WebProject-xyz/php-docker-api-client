<?php

declare(strict_types=1);

namespace WebProject\DockerApiClient\Tests\Unit\Util;

use PHPUnit\Framework\Attributes\CoversClass;
use WebProject\DockerApi\Library\Generated\Model\EndpointSettings;
use WebProject\DockerApi\Library\Generated\Model\PortBinding;
use WebProject\DockerApiClient\Util\ContainerResponseToContainerDtoUtil;

#[CoversClass(ContainerResponseToContainerDtoUtil::class)]
class ContainerResponseToContainerDtoUtilTest extends \Codeception\Test\Unit
{
    public function testInvokeMinValues(): void
    {
        // Arrange
        $containerInspectResponse        = new \WebProject\DockerApi\Library\Generated\Model\ContainerInspectResponse();
        $containerInspectResponse->id    = 'container-idValue';
        $containerInspectResponse->image = 'container-imageValue';
        $containerInspectResponse->name  = '/container-name';

        $networkSettings                           = new \WebProject\DockerApi\Library\Generated\Model\NetworkSettings();
        $networkSettings->networks                 = [];
        $networkSettings->ports                    = [];
        $containerInspectResponse->networkSettings = $networkSettings;

        $containerConfig                  = new \WebProject\DockerApi\Library\Generated\Model\ContainerConfig();
        $containerConfig->env             = [];
        $containerInspectResponse->config = $containerConfig;

        // Act
        $containerDto = (new ContainerResponseToContainerDtoUtil())(containerInspect: $containerInspectResponse);

        // Assert
        $this->assertSame('container-idValue', $containerDto->id);
        $this->assertSame('container-imageValue', $containerDto->image);
        $this->assertSame([], $containerDto->ipAddresses);
        $this->assertSame([], $containerDto->networks);
        $this->assertFalse($containerDto->running);
        $this->assertSame('container-name', $containerDto->getName());
        $this->assertSame(['container-name'], $containerDto->getHostnames(tld: ''));
    }

    public function testInvokeMaxValues(): void
    {
        // Arrange
        $containerInspectResponse        = new \WebProject\DockerApi\Library\Generated\Model\ContainerInspectResponse();
        $containerInspectResponse->id    = 'container-idValue';
        $containerInspectResponse->image = 'container-imageValue';
        $containerInspectResponse->name  = '/container-name';

        $endpoint            = new EndpointSettings();
        $endpoint->iPAddress = '192.12.12.12';
        $endpoint->aliases   = ['e1-alias1'];

        $endpoint2            = new EndpointSettings();
        $endpoint2->iPAddress = '123.12.12.12';
        $endpoint2->aliases   = ['e2-alias1', 'e2-alias2'];

        $networkSettings           = new \WebProject\DockerApi\Library\Generated\Model\NetworkSettings();
        $networkSettings->networks = ['ca7d9ec2cf61951cf24ed7c91006927fa1259aabaf07e334f5e0b0fe36ce5794' => $endpoint, '4a7d9ec2cf61951cf24ed7c91006927fa1259aabaf07e334f5e0b0fe36ce5794' =>  $endpoint2];
        $networkSettings->ports    = ['5006/tcp' => []];

        $containerInspectResponse->networkSettings = $networkSettings;

        $state                           = new \WebProject\DockerApi\Library\Generated\Model\ContainerState();
        $state->running                  = true;
        $containerInspectResponse->state = $state;

        $containerConfig      = new \WebProject\DockerApi\Library\Generated\Model\ContainerConfig();
        $containerConfig->env = [
            // expect this
            'VIRTUAL_HOST=actual.reverse-proxy-subdomain.xyz',
            'DOMAIN_NAME=domain-name.reverse-proxy-subdomain.xyz',

            'VIRTUAL_PORT=5006',
            'WEB_PORTS=443',
            'PATH=/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin',
            'NODE_VERSION=18.19.1',
            'YARN_VERSION=1.22.19',
        ];

        $containerInspectResponse->config = $containerConfig;

        // Act
        $containerDto = (new ContainerResponseToContainerDtoUtil())(containerInspect: $containerInspectResponse);

        // Assert
        $this->assertSame('container-idValue', $containerDto->id);
        $this->assertSame('container-imageValue', $containerDto->image);
        $this->assertSame(['192.12.12.12', '123.12.12.12'], $containerDto->ipAddresses);

        $expectedNetworks = [
            'ca7d9ec2cf61951cf24ed7c91006927fa1259aabaf07e334f5e0b0fe36ce5794' => [
                'aliases' => [
                    0 => 'e1-alias1',
                ],
                'ip' => '192.12.12.12',
            ],
            '4a7d9ec2cf61951cf24ed7c91006927fa1259aabaf07e334f5e0b0fe36ce5794'  => [
                'aliases' => [
                    0 => 'e2-alias1',
                    1 => 'e2-alias2',
                ],
                'ip' => '123.12.12.12',
            ],
        ];
        $this->assertSame($expectedNetworks, $containerDto->networks);
        $this->assertTrue($containerDto->running);
        $this->assertSame('container-name', $containerDto->getName());
        $this->assertSame(['container-name'], $containerDto->getHostnames(tld: ''));
        $this->assertSame(
            ['actual.reverse-proxy-subdomain.xyz', 'domain-name.reverse-proxy-subdomain.xyz'],
            $containerDto->extractUrlsFromEnvVars(extractFromEnvVars: ['DOMAIN_NAME', 'VIRTUAL_HOST'])
        );
        $this->assertTrue($containerDto->isExposed());
    }

    public function testExposedPortsWithoutHostBindingAreValid(): void
    {
        // Arrange
        $containerInspectResponse        = new \WebProject\DockerApi\Library\Generated\Model\ContainerInspectResponse();
        $containerInspectResponse->id    = 'container-idValue';
        $containerInspectResponse->image = 'container-imageValue';
        $containerInspectResponse->name  = '/container-name';

        $networkSettings                           = new \WebProject\DockerApi\Library\Generated\Model\NetworkSettings();
        $networkSettings->networks                 = [];
        $networkSettings->ports                    = ['80/tcp' => [], '8080/tcp' => [new PortBinding()]];
        $containerInspectResponse->networkSettings = $networkSettings;

        $containerConfig                  = new \WebProject\DockerApi\Library\Generated\Model\ContainerConfig();
        $containerConfig->env             = [];
        $containerInspectResponse->config = $containerConfig;

        $state                           = new \WebProject\DockerApi\Library\Generated\Model\ContainerState();
        $state->running                  = true;
        $containerInspectResponse->state = $state;

        // Act
        $containerDto = (new ContainerResponseToContainerDtoUtil())(containerInspect: $containerInspectResponse);

        // Assert
        $this->assertSame('container-idValue', $containerDto->id);
        $this->assertSame('container-imageValue', $containerDto->image);
        $this->assertSame([], $containerDto->ipAddresses);
        $this->assertSame([], $containerDto->networks);
        $this->assertTrue($containerDto->running);
        $this->assertSame('container-name', $containerDto->getName());
        $this->assertSame(['container-name'], $containerDto->getHostnames(tld: ''));
        $this->assertTrue($containerDto->isExposed());
    }
}
