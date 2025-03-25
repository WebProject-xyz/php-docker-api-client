<?php
declare(strict_types=1);

namespace WebProject\DockerApi\Library\Generated\Exception;

class ImageCreateNotFoundException extends NotFoundException
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
        parent::__construct('repository does not exist or no read access');
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
