<?php

declare(strict_types=1);

use WebProject\DockerApi\Library\Generated\Model\ContainerInspectResponse;
use WebProject\DockerApiClient\Factory\ClientFactory;

require_once dirname(__DIR__) . '/vendor/autoload.php';

$client = ClientFactory::create()
    ->getDockerClient();

foreach ($client->containerList() as $container) {
    if (null === $container->id) {
        continue;
    }

    echo 'Id: ' . $container->id . "\n";

    foreach ($container->names ?? [] as $name) {
        echo 'Name: ' . $name . "\n";
    }

    $inspect = $client->containerInspect($container->id);
    if ($inspect instanceof ContainerInspectResponse) {
        foreach ($inspect->config->env ?? [] as $value) {
            if (!str_contains($value, '=')) {
                continue;
            }
            [$envName, $envValue] = explode('=', $value, 2);
            echo $envName . ': ' . $envValue . "\n";
        }
    }
    echo "------\n\n";
}
