<?php

namespace PagueVeloz\Api\v1;

use PagueVeloz\Api\InterfaceApi;
use PagueVeloz\Api\v1\Dto\UsuarioClienteDTO;
use PagueVeloz\ServiceProvider;

class UsuarioCliente extends ServiceProvider implements InterfaceApi
{
    public function __construct(UsuarioClienteDTO $dto)
    {
        $this->dto = $dto;
        $this->uri = '/v1/UsuarioCliente';

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
        $this->method = 'GET';
        $this->Authorization();
        $this->url = sprintf('%s/%s', $this->url, $id);

        return $this->init();
    }

    public function Post()
    {
        return $this->NoContent();
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
