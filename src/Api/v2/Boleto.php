<?php

namespace PagueVeloz\Api\v2;

use PagueVeloz\Api\InterfaceApi;
use PagueVeloz\Api\v2\Dto\BoletoDTO;
use PagueVeloz\Service\Context\HttpRequest;
use PagueVeloz\ServiceProvider;

class Boleto extends ServiceProvider implements InterfaceApi
{
    public function __construct(BoletoDTO $dto)
    {
        $this->dto = $dto;

        $this->uri = '/v2/Boleto';

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

    public function GetByPagamento($data)
    {
        $_data = new \DateTime($data);

        $this->method = 'GET';
        $this->Authorization();

        $this->url = sprintf('%s/?data=%s', $this->url, $_data->format('Y-m-d'));

        return $this->init();
    }

    public function Post()
    {
        if ($this->isEmpty($this->dto->getRequest())) {
            throw new \Exception('Erro ao montar request');
        }

        $request = new HttpRequest();

        $request->body = $this->dto->getRequest();
        $this->method = 'POST';
        $this->Authorization();

        return $this->init($request);
    }

    public function Put($id = null)
    {
        return $this->NoContent();
    }

    public function Delete($id)
    {
        return $this->NoContent();
    }
}
