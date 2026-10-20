<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Runtime\Normalizer;

use function count;

trait CheckArray
{
    public function isOnlyNumericKeys(array $array): bool
    {
        return count(array_filter($array, static fn ($key): bool => is_numeric($key), ARRAY_FILTER_USE_KEY)) === count($array);
    }
}
