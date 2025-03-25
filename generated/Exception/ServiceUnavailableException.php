<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Exception;

use RuntimeException;

class ServiceUnavailableException extends RuntimeException implements ServerException
{
    public function __construct(string $message)
    {
        parent::__construct($message, 503);
    }
}
