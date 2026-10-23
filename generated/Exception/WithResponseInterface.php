<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Symfony\Contracts\HttpClient\ResponseInterface;
}
