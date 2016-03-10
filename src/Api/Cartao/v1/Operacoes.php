<?php

namespace PagueVeloz\Api\Cartao\v1;

/*
 * Operacoes.php
 *
 *
 * @author Cristian B. dos Santos <cristian.deveng@gmail.com>
 * @copyright 2016
 * @version 1.0v
*/

use PagueVeloz\Api\InterfaceApi;
use PagueVeloz\Service\Context\HttpRequest;
use PagueVeloz\ServiceProvider;

class Operacoes extends ServiceProvider implements InterfaceApi
{
    public function __construct()
    {

        $this->uri = '/PinPad/v1/Operacoes';
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
        if ($this->isEmpty($this->dto->getRequest())) {
            throw new \Exception('Erro ao montar request', 1);
        }

        $this->Authorization();
        $request = new HttpRequest();

        $request->body = $this->dto->getRequest();
        $this->method = 'POST';

        return $this->init($request);
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
