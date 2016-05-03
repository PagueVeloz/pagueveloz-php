<?php

namespace PagueVeloz\Api\v1;

use PagueVeloz\Api\InterfaceApi;
use PagueVeloz\Api\v1\Dto\AssinarDTO;
use PagueVeloz\Service\Context\HttpRequest;
use PagueVeloz\ServiceProvider;
use PagueVeloz\Exception\NotImplementedException;
use PagueVeloz\Exception\InvalidInputException;

class Assinar extends ServiceProvider implements InterfaceApi
{
    public function __construct(AssinarDTO $dto)
    {
        parent::__construct();
        $this->dto = $dto;
        $this->uri = '/v1/Assinar';
        return $this;
    }

    public function Get()
    {
        throw new NotImplementedException;
    }

    public function GetById($id)
    {
        throw new NotImplementedException;
    }

    public function Post()
    {
        if ($this->isEmpty($this->dto->getRequest())) {
            throw new InvalidInputException;
        }

        $request = new HttpRequest();
        $request->body = $this->dto->getRequest();
        $this->method = 'POST';

        return $this->init($request);
    }

    public function Put($id = null)
    {
        throw new NotImplementedException;
    }

    public function Delete($id)
    {
        throw new NotImplementedException;
    }
}
