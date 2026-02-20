<?php
declare(strict_types=1);

namespace WebProject\DockerApiClient\Command;

use Exception;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use WebProject\DockerApiClient\Dto\DockerContainerDto;
use WebProject\DockerApiClient\Event\ContainerEvent;
use WebProject\DockerApiClient\Factory\ClientFactory;
use WebProject\DockerApiClient\Service\DockerService;
use function in_array;
use function substr;

#[AsCommand(
    name: 'docker:events:listen',
    description: 'Listen for socket events.'
),]
final class EventsListenCommand extends Command
{
    /** @var array<DockerContainerDto|false> */
    private array $containers = [];

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io     = new SymfonyStyle($input, $output);

        $service = new DockerService(
            ClientFactory::create(),
        );

        $actions = [
            'start',
            'die',
            'stop',
        ];

        $service->listenForEvents(function (ContainerEvent $event) use ($service, $actions, $io) {
            $container = $this->containers[$event->Actor->ID] ?? null;
            $prefix    = '[event]';
            if ($container) {
                $prefix .= ' [' . $container->getName() . ']';
            }

            $message = $prefix . ' [Actor: ' . $event->Actor->ID . '][Type: ' . $event->Type . ']';

            if (!in_array($event->Action, $actions, true)) {
                if ($io->isVeryVerbose()) {
                    $io->writeln($message . ' - SKIP type: ' . $event->Type . ' ' . substr($event->Action, 0, 12));
                } elseif ($io->isVerbose()) {
                    $io->writeln($message . ' - skipped');
                }

                return;
            }

            try {
                $container ??= $service->findContainer($event->Actor->ID);

                if (!$container instanceof DockerContainerDto) {
                    // set false to skip on next check
                    $this->containers[$event->Actor->ID] = false;
                    $io->writeln($message . ' Actor: ' . $event->Actor->ID . ' does not exist.');

                    return;
                }
                $message .= ' [container: ' . $container->getName() . ' - image: ' . $container->image . ']';
                $io->writeln($message);
            } catch (Exception $e) {
                $io->error($e->getMessage());

                return;
            }
        });

        return self::SUCCESS;
    }
}
