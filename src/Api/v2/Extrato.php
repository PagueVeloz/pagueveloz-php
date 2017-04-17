<?php

namespace PagueVeloz\Api\v2;

use PagueVeloz\Api\InterfaceApi;
use PagueVeloz\Exception\NotImplementedException;
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
        throw new NotImplementedException();
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
        throw new NotImplementedException();
    }

    public function Put($id = null)
    {
        throw new NotImplementedException();
    }

    public function Delete($id)
    {
        throw new NotImplementedException();
    }
}
