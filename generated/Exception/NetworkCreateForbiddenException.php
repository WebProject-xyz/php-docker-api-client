<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Exception;

class NetworkCreateForbiddenException extends ForbiddenException
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
        parent::__construct('Forbidden operation. This happens when trying to create a network named after a pre-defined network,
or when trying to create an overlay network on a daemon which is not part of a Swarm cluster.
');
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
