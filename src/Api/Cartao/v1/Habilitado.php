<?php

namespace PagueVeloz\Api\Cartao\v1;

use PagueVeloz\Api\InterfaceApi;
use PagueVeloz\ServiceProvider;

class Habilitado extends ServiceProvider implements InterfaceApi
{
    public function __construct()
    {
        $this->uri = '/VendaDigitada/v1/Habilitado';
        $this->isOperationCartao = true;
        parent::__construct();

        return $this;
    }

    public function Get()
    {
        $this->Authorization();

        $this->method = 'GET';
        $this->Authorization();

        return $this->init();
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
