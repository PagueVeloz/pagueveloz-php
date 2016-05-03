<?php

namespace PagueVeloz\Api\v1;

use PagueVeloz\Api\InterfaceApi;
use PagueVeloz\ServiceProvider;

class Cep extends ServiceProvider implements InterfaceApi
{
    public function __construct()
    {
        $this->uri = '/v1/CEP';

        parent::__construct();

        return $this;
    }

    public function Get()
    {
        return $this->NoContent();
    }

    public function GetById($id)
    {
        $this->method = 'GET';

        $this->url = sprintf('%s/%s', $this->url, $id);

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
