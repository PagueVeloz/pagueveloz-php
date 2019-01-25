<?php

namespace PagueVeloz\Api\v1\Transito\SP\Despachantes;

use PagueVeloz\Api\InterfaceApi;
use PagueVeloz\Api\v1\Transito\SP\Despachantes\Dto\PagamentoDespachanteDTO;
use PagueVeloz\ServiceProvider;
use PagueVeloz\Service\Context\HttpRequest;

class Pagamentos extends ServiceProvider implements InterfaceApi
{
    public function __construct(PagamentoDespachanteDTO $dto)
    {
        $this->dto = $dto;
        $this->uri = '/v1/Transito/SP/Despachantes/Pagamentos';

        parent::__construct();

        return $this;
    }

    public function GetDebitos($renavam, $servico)
    {
        $this->method = 'GET';
        $this->Authorization();
        $this->url = sprintf('%s/%s/%s', $this->url, $renavam, $servico);

        return $this->init();
    }

    public function GetServicos()
    {
        $this->method = 'GET';
        $this->Authorization();
        $this->url = sprintf('%/Servicos', $this->url);

        return $this->init();
    }

    public function GetListas()
    {
        $this->method = 'GET';
        $this->Authorization();
        $this->url = sprintf('%/Listas', $this->url);

        return $this->init();
    }

    public function GetConsultarPrimeiroRegistro()
    {
        $this->method = 'GET';
        $this->Authorization();
        $this->url = sprintf('%/ConsultarPrimeiroRegistro', $this->url);

        return $this->init();
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
        $request = new HttpRequest();
        if ($this->isEmpty($this->dto->getRequest())) {
            throw new \Exception('Erro ao montar request');
        }

        $this->method = 'POST';
        $this->Authorization();
        $this->url = sprintf('%/Pagar', $this->url);

        $request->body = $this->dto->getRequest();

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
