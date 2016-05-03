<?php

namespace PagueVeloz\Api\v1;

use PagueVeloz\Api\InterfaceApi;
use PagueVeloz\Api\v1\Dto\ContaPagDTO;
use PagueVeloz\Service\Context\HttpRequest;
use PagueVeloz\ServiceProvider;

class ContaPag extends ServiceProvider implements InterfaceApi
{
    public function __construct(ContaPagDTO $dto)
    {
        $this->dto = $dto;
        $this->uri = '/v1/Conta';

        parent::__construct();

        return $this;
    }

    public function Get()
    {
        $this->url = $this->url.'/Filtro';

        $this->method = 'GET';
        $this->Authorization();

        return $this->init();
    }

    public function GetById($id)
    {
        return $this->NoContent();
    }

    public function GetByBarCode($barCode)
    {
        $this->url = $this->url.'/Filtro?CodigoDeBarras='.$barCode;

        $this->method = 'GET';
        $this->Authorization();

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
