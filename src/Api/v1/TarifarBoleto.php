<?php

namespace PagueVeloz\Api\v1;

use PagueVeloz\Api\InterfaceApi;
use PagueVeloz\Api\v1\Dto\TarifarBoletoDTO;
use PagueVeloz\Service\Context\HttpRequest;
use PagueVeloz\ServiceProvider;

class TarifarBoleto extends ServiceProvider implements InterfaceApi
{
    public function __construct(TarifarBoletoDTO $dto)
    {
        $this->dto = $dto;
        $this->uri = '/v1/TarifarBoleto';

        parent::__construct();

        return $this;
    }

    public function Get()
    {
        return $this->NoContent();
    }

    public function GetById($id)
    {
        return $this->NoContent();
    }

    public function Post()
    {
        if ($this->isEmpty($this->dto->getRequest())) {
            throw new \Exception('Erro ao montar request');
        }

        $request = new HttpRequest();
        $this->url = sprintf('%s/%s', $this->url, $this->dto->getBoleto());

        $request->body = $this->dto->getRequest();
        $this->method = 'POST';
        $this->Authorization();

        return $this->init($request);
    }

    public function Put($id)
    {
        return $this->NoContent();
    }

    public function Delete($id)
    {
        return $this->NoContent();
    }
}
