<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Exception;

use RuntimeException;

class NotFoundException extends RuntimeException implements ClientException
{
    public function __construct(string $message)
    {
        parent::__construct($message, 404);
    }
}
