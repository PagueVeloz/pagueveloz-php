<?php

namespace PagueVeloz\Api\v1;

/*
 * ConsultarBoleto.php
 *
 *
 * @author Cristian B. dos Santos <cristian.deveng@gmail.com>
 * @copyright 2015
 * @version 1.0v
*/

use PagueVeloz\Api\InterfaceApi;
use PagueVeloz\ServiceProvider;

class ConsultarBoleto extends ServiceProvider implements InterfaceApi
{
    public function __construct()
    {
        $this->uri = '/v1/ConsultarBoleto';

        parent::__construct();

        return $this;
    }

    public function Get()
    {
        return $this->NoContent();
    }

    public function GetByPagamento($data)
    {
        $_data = new \DateTime($data);

        $this->method = 'GET';
        $this->Authorization();

        $this->url = sprintf('%s/?data=%s', $this->url, $_data->format('Y-m-d'));

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
