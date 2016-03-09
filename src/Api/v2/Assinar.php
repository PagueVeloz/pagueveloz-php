<?php

namespace PagueVeloz\Api\v2;

/*
 * Assinar.php
 *
 *
 * @author Cristian B. dos Santos <cristian.deveng@gmail.com>
 * @copyright 2015
 * @version 1.0v
*/

use PagueVeloz\Api\InterfaceApi;
use PagueVeloz\Api\v2\Dto\AssinarDTO;
use PagueVeloz\Service\Context\HttpRequest;
use PagueVeloz\ServiceProvider;

class Assinar extends ServiceProvider implements InterfaceApi
{
    public function __construct(AssinarDTO $dto)
    {
        $this->dto = $dto;
        $this->uri = '/v2/Assinar';

        parent::__construct();

        return $this;
    }

    public function Get()
    {
        return $this->NoContent();
    }

    public function GetById($id)
    {
        return $this->NoContent();
    }

    public function Post()
    {
        if ($this->isEmpty($this->dto->getRequest())) {
            throw new \Exception('Erro ao montar request', 1);
        }

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
