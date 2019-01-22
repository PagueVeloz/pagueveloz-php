<?php

namespace PagueVeloz\Api\v1\Transito\SP\Despachantes;

use PagueVeloz\Api\InterfaceApi;
use PagueVeloz\Api\v1\Dto\UsuarioClienteDTO;
use PagueVeloz\ServiceProvider;

class Pagamentos extends ServiceProvider implements InterfaceApi
{
    public function __construct()
    {
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
        return $this->NoContent();
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
