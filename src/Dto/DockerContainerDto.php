<?php

declare(strict_types=1);

namespace WebProject\DockerApiClient\Dto;

use WebProject\DockerApi\Library\Generated\Model\PortBinding;
use function array_unique;
use function dump;
use function explode;
use function in_array;
use function substr;

final readonly class DockerContainerDto
{
    public function __construct(
        public string $id,
        private string $name,
        public string $image,
        public bool $running,
        /** @var array<string, string> */
        public array $envVariables,
        /** @var array<string> */
        public array $ipAddresses,
        /**
         * @var array<string, array{aliases: array<string>, ip: string}>
         */
        public array $networks,
        /** @var array<string, list<PortBinding>> */
        public array $ports,
    ) {
    }

    public function getName(): string
    {
        return substr($this->name, 1);
    }

    public function isExposed(): bool
    {
        if (empty($this->ports)) {
            return false;
        }

        return $this->running;
    }

    /**
     * Note: the default container name is excluded to prevent issues with docker dns.
     */
    public function getHostnames(string $tld): array
    {
        $hosts = [
            // $this->getName(),
            $this->getName() . $tld,
        ];

        return array_unique($hosts);
    }

    /**
     * @phpstan-param array<string> $extractFromEnvVars
     * @phpstan-param array<string> $hosts
     */
    public function extractUrlsFromEnvVars(array $extractFromEnvVars): array
    {
        $hosts = [];

        foreach ($this->envVariables as $name => $value) {
            if (!in_array($name, $extractFromEnvVars, true)) {
                continue;
            }

            foreach (explode(',', $value) as $item) {
                $hosts[] = $item;
            }
        }

        return $hosts;
    }
}
