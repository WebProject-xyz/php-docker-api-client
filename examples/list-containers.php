<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/vendor/autoload.php';

$client = WebProject\DockerApiClient\Factory\ClientFactory::create()
    ->getDockerClient();

foreach ($client->containerList() as $container) {
    echo 'Id: ' . $container->getId() . "\n";

    foreach ($container->getNames() as $key => $value) {
        echo 'Name: ' . $value . "\n";
    }

    foreach ($client->containerInspect($container->getId())->getConfig()->getEnv() as $value) {
        [$envName, $envValue] = explode('=', $value);
        echo $envName . ': ' . $envValue . "\n";
    }
    echo "------\n\n";
}
