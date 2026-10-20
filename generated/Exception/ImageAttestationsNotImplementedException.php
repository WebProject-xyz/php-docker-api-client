<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Exception;

class ImageAttestationsNotImplementedException extends NotImplementedException
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
        parent::__construct('The daemon\'s image backend does not support attestations. This
is returned by the legacy (graphdriver) image store, which does
not preserve OCI image indexes.
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
