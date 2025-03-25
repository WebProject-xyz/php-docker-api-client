<?php

declare(strict_types=1);

namespace WebProject\DockerApiClient\Event;

use Symfony\Component\Serializer\Attribute\SerializedName;

class ContainerEvent
{
    public function __construct(
        public string $status,
        public string $id,
        public string $from,
        #[SerializedName('Type')]
        public string $Type,
        #[SerializedName('Action')]
        public string $Action,
        public string $scope,
        public int $time,
        public int $timeNano,
    ) {
    }
}
