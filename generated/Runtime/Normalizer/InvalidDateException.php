<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Runtime\Normalizer;

use RuntimeException;
use function is_scalar;
use function sprintf;

class InvalidDateException extends RuntimeException
{
    public function __construct(mixed $value, string $format)
    {
        parent::__construct(sprintf('Invalid date value "%s": does not match the expected format "%s".', is_scalar($value) ? (string) $value : get_debug_type($value), $format));
    }
}
