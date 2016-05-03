<?php

namespace PagueVeloz\Api\Cartao\v1;

use PagueVeloz\Api\InterfaceApi;
use PagueVeloz\ServiceProvider;

class Formulario extends ServiceProvider implements InterfaceApi
{
    public function __construct()
    {
        $this->uri = '/VendaDigitada/v1/Formulario';
        $this->isOperationCartao = true;
        parent::__construct();

        return $this;
    }

    public function Get()
    {
        return $this->NoContent();
    }

    public function GetById($id)
    {
        $this->Authorization();

        $this->url = sprintf('%s/%s', $this->url, $id);

        $this->method = 'GET';
        $this->Authorization();

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
