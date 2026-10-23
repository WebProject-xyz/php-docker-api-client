<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Model;

use DateTimeInterface;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalAndPatternProperties;
use WebProject\DockerApi\Library\Generated\Runtime\AdditionalPropertiesInterface;

class ServiceUpdateStatus implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string|null
     */
    public ?string $state;
    /**
     * @var DateTimeInterface|null
     */
    public ?DateTimeInterface $startedAt;
    /**
     * @var DateTimeInterface|null
     */
    public ?DateTimeInterface $completedAt;
    /**
     * @var string|null
     */
    public ?string $message;

    public function definedProperties(): array
    {
        return ['state' => 'State', 'startedAt' => 'StartedAt', 'completedAt' => 'CompletedAt', 'message' => 'Message'];
    }
}
