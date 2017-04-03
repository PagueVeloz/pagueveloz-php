<?php

namespace PagueVeloz\Api\v2;

use PagueVeloz\Api\InterfaceApi;
use PagueVeloz\ServiceProvider;

class Extrato extends ServiceProvider implements InterfaceApi
{
    public function __construct()
    {
        $this->uri = '/v2/Extrato';

        parent::__construct();

        return $this;
    }

    public function Get()
    {
        $this->method = 'GET';
        $this->Authorization();

        return $this->init();
    }

    public function GetById($id)
    {
        return $this->NoContent();
    }

    public function GetByPeriodo($dtInicial, $dtFinal)
    {
        $_inicio = new \DateTime($dtInicial);
        $_final = new \DateTime($dtFinal);

        $this->method = 'GET';
        $this->Authorization();

        $this->url = sprintf('%s?inicio=%s&fim=%s', $this->url, $_inicio->format('Y-m-d'), $_final->format('Y-m-d'));

        return $this->init();
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
