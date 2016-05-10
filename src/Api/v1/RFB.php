<?php

namespace PagueVeloz\Api\v1;

use PagueVeloz\Api\InterfaceApi;
use PagueVeloz\ServiceProvider;
use PagueVeloz\Exception\NotImplementedException;

class RFB extends ServiceProvider implements InterfaceApi
{
    public function __construct()
    {
        $this->uri = '/v1/RFB';

        parent::__construct();

        return $this;
    }

    public function Get()
    {
        throw new NotImplementedException;
    }

    public function GetById($id)
    {
        throw new NotImplementedException;
    }

    public function GetByCnpj($cnpj)
    {
        $this->method = 'GET';
        $this->Authorization();
        $this->url = sprintf('%s/%s', $this->url, $cnpj);

        return $this->init();
    }

    public function Post()
    {
        throw new NotImplementedException;
    }

    public function Put($id = null)
    {
        throw new NotImplementedException;
    }

    public function Delete($id)
    {
        throw new NotImplementedException;
    }
}
