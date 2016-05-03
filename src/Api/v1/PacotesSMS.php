<?php

namespace PagueVeloz\Api\v1;

use PagueVeloz\Api\InterfaceApi;
use PagueVeloz\ServiceProvider;

class PacotesSMS extends ServiceProvider implements InterfaceApi
{
    public function __construct()
    {
        $this->uri = '/v1/PacotesSMS';

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
