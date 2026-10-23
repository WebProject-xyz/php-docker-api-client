<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Exception;

class ImageBuildBadRequestException extends BadRequestException
{
    public function __construct(
        /**
         * @var \WebProject\DockerApi\Library\Generated\Model\ErrorResponse
         */
        private readonly \WebProject\DockerApi\Library\Generated\Model\ErrorResponse $errorResponse,
        /**
         * @var \Symfony\Contracts\HttpClient\ResponseInterface
         */
        private readonly \Symfony\Contracts\HttpClient\ResponseInterface $response
    ) {
        parent::__construct('Bad parameter');
    }

    public function getErrorResponse(): \WebProject\DockerApi\Library\Generated\Model\ErrorResponse
    {
        return $this->errorResponse;
    }

    public function getResponse(): \Symfony\Contracts\HttpClient\ResponseInterface
    {
        return $this->response;
    }
}
