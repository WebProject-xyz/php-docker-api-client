<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Exception;

class ContainerAttachNotFoundException extends NotFoundException
{
    public function __construct(
        /**
         * @var \Symfony\Contracts\HttpClient\ResponseInterface|null
         */
        private readonly ?\Symfony\Contracts\HttpClient\ResponseInterface $response = null
    ) {
        parent::__construct('no such container');
    }

    public function getResponse(): ?\Symfony\Contracts\HttpClient\ResponseInterface
    {
        return $this->response;
    }
}
