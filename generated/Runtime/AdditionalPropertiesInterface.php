<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Runtime;

use IteratorAggregate;

interface AdditionalPropertiesInterface extends IteratorAggregate, \Countable, \ArrayAccess, \JsonSerializable
{
    /**
     * @return array<string, mixed>
     */
    public function toArray(): array;

    /**
     * @return iterable<string, mixed>
     */
    public function additionalPropertyEntries(): iterable;
}
