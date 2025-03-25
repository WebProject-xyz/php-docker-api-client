<?php
declare(strict_types=1);

namespace WebProject\DockerApiClient\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use WebProject\DockerApiClient\Factory\ClientFactory;
use WebProject\DockerApiClient\Service\DockerService;
use function implode;
use function substr;

#[AsCommand(
    name: 'docker:list-containers',
    description: 'List docker containers.'
),
]
final class ListContainersCommand extends Command
{
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io     = new SymfonyStyle($input, $output);

        $service = new DockerService(
            ClientFactory::create(),
        );

        $rows = [];

        foreach ($service->findAllContainer() as $container) {
            $row = [
                'id'   => substr($container->id, 0, 12),
                'name' => $container->getName(),
            ];

            $message = '[+] ' . $container->getName() . ' (' . $container->id . ')';
            if ($output->isVerbose()) {
                $io->section($message);
            } elseif ($output->isVeryVerbose()) {
                $io->writeln($message);
            }

            $envs = [];
            foreach ($container->envVariables as $value) {
                [$envName, $envValue] = $value;
                $var                  = $envName . ': ' . $envValue;
                $envs[]               = $var;
                if ($output->isVerbose()) {
                    $io->writeln('[+] env: ' . $var);
                }
            }

            $row['env'] = implode("\n", $envs);

            if ($output->isVerbose()) {
                $io->newLine();
            }
            $ips = [];
            foreach ($container->networks as $networkName => $network) {
                if ($output->isVerbose()) {
                    $io->writeln('[+] Network: ' . $networkName);
                }
                $ip                = $network['ip'];
                $ips[$networkName] = $networkName . "\n" . $ip;

                if ($output->isVerbose()) {
                    $io->writeln('[+] IP: ' . $ip);
                }
            }
            $row['ip'] = implode("\n", $ips);
            if ($output->isVerbose()) {
                $io->newLine();
            }
            $rows[] = $row;
        }

        $io->table(['ID', 'Name', 'ENV', 'IP'], $rows);

        return self::SUCCESS;
    }
}
