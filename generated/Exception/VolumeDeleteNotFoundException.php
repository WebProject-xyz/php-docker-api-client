<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Exception;

class VolumeDeleteNotFoundException extends NotFoundException
{
    /**
     * @var \WebProject\DockerApi\Library\Generated\Model\ErrorResponse
     */
    private $errorResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\WebProject\DockerApi\Library\Generated\Model\ErrorResponse $errorResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('No such volume or volume driver');
        $this->errorResponse = $errorResponse;
        $this->response      = $response;
    }

    public function getErrorResponse(): \WebProject\DockerApi\Library\Generated\Model\ErrorResponse
    {
        return $this->errorResponse;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
