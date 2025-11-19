<?php

declare(strict_types=1);

namespace WebProject\DockerApiClient\Event;

use Symfony\Component\Serializer\Attribute\SerializedName;

final readonly class EventActor
{
    /**
     * @param array<non-empty-string, non-empty-string> $Attributes
     */
    public function __construct(
        #[SerializedName('ID')]
        public string $ID,
        /** @var array<non-empty-string, non-empty-string> $Attributes */
        #[SerializedName('Attributes')]
        public array $Attributes = [],
    ) {
    }
}
