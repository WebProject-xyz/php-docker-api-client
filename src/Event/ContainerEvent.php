<?php

declare(strict_types=1);

namespace WebProject\DockerApiClient\Event;

use Symfony\Component\Serializer\Attribute\SerializedName;
use Symfony\Component\Validator\Constraints as Assert;

class ContainerEvent
{
    public function __construct(
        #[SerializedName('Type')]
        public string $Type,
        #[SerializedName('Action')]
        public string $Action,
        #[Assert\Valid]
        #[SerializedName('Actor')]
        public EventActor $Actor,
        public string $scope,
        public int $time,
        public int $timeNano,
    ) {
    }
}
