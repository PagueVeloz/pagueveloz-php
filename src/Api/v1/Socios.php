<?php

namespace PagueVeloz\Api\v1;

use PagueVeloz\Api\InterfaceApi;
use PagueVeloz\Exception\NotImplementedException;
use PagueVeloz\ServiceProvider;

class Socios extends ServiceProvider implements InterfaceApi
{
    public function __construct()
    {
        $this->uri = '/v1/Socios';

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
