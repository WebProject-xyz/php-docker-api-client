<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Exception;

use RuntimeException;

abstract class NotImplementedException extends RuntimeException implements ServerException, WithResponseInterface
{
    public function __construct(string $message)
    {
        parent::__construct($message, 501);
    }
}
