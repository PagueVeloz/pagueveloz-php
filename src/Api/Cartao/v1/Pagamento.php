<?php

namespace PagueVeloz\Api\Cartao\v1;

use PagueVeloz\Api\Cartao\v1\Dto\PagamentoDTO;
use PagueVeloz\Api\InterfaceApi;
use PagueVeloz\Service\Context\HttpRequest;
use PagueVeloz\ServiceProvider;

class Pagamento extends ServiceProvider implements InterfaceApi
{
    public function __construct(PagamentoDTO $dto)
    {
        $this->dto = $dto;
        $this->uri = '/VendaDigitada/v1/Pagamento';
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
        return $this->NoContent();
    }

    public function Post()
    {
        if ($this->isEmpty($this->dto->getRequest())) {
            throw new \Exception('Erro ao montar request');
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
