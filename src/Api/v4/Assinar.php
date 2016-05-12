<?php

namespace PagueVeloz\Api\v4;

use PagueVeloz\Api\InterfaceApi;
use PagueVeloz\Api\v4\Dto\AssinarDTO;
use PagueVeloz\Service\Context\HttpRequest;
use PagueVeloz\ServiceProvider;
use PagueVeloz\Exception\NotImplementedException;

class Assinar extends ServiceProvider implements InterfaceApi
{
    public function __construct(AssinarDTO $dto)
    {
        $this->dto = $dto;
        $this->uri = '/v4/Assinar';

        parent::__construct();

        return $this;
    }

    public function Get()
    {
        throw new \NotImplementedException;

    }

    public function GetById($id)
    {
        throw new \NotImplementedException;

    }

    public function Post()
    {
        if ($this->isEmpty($this->dto->getRequest())) {
            throw new \Exception('Erro ao montar request');
        }

        $request = new HttpRequest();

        $request->body = $this->dto->getRequest();
        $this->method = 'POST';

        return $this->init($request);
    }

    public function Put($id = null)
    {
        throw new \NotImplementedException;

    }

    public function Delete($id)
    {
        throw new \NotImplementedException;

    }
}
