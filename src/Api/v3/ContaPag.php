<?php

namespace PagueVeloz\Api\v3;

use PagueVeloz\Api\InterfaceApi;
use PagueVeloz\Api\v3\Dto\ContaPagDTO;
use PagueVeloz\Service\Context\HttpRequest;
use PagueVeloz\ServiceProvider;

class ContaPag extends ServiceProvider implements InterfaceApi
{
    public function __construct(ContaPagDTO $dto)
    {
        $this->dto = $dto;
        $this->uri = '/v3/Conta';

        parent::__construct();

        return $this;
    }

    public function Get($filters = null)
    {
        if (!is_null($filters) && is_array($filters)) {
            $filters = implode('&', array_map(function ($v, $k) {
                return sprintf('%s=%s', $k, $v);
            }, $filters, array_keys($filters)));

            $this->url = $this->url.(strlen($filters) > 0 ? sprintf('?%s', $filters) : '');
        }

        $this->method = 'GET';
        $this->Authorization();

        return $this->init();
    }

    public function GetById($id)
    {
        $this->url = $this->url.'/'.$id;

        $this->method = 'GET';
        $this->Authorization();

        return $this->init();
    }

    public function GetComprovanteById($id)
    {
        $this->url = $this->url.'/'.$id.'/Comprovante';

        $this->method = 'GET';
        $this->Authorization();

        return $this->init();
    }

    public function GetByBarrasPagamento($codigo)
    {
        $this->url = $this->url.'/Barras?codigo='.$codigo;

        $this->method = 'GET';
        $this->Authorization();

        return $this->init();
    }

    public function GetByBarCode($barCode)
    {
        $this->url = $this->url.'?CodigoDeBarras='.$barCode;

        $this->method = 'GET';
        $this->Authorization();

        return $this->init();
    }

    public function Post()
    {
        if ($this->isEmpty($this->dto->getRequest())) {
            throw new \Exception('Erro ao montar request');
        }

        $request = new HttpRequest();

        $request->body = $this->dto->getRequest();
        $this->method = 'POST';
        $this->Authorization();

        return $this->init($request);
    }

    public function Put($id = null)
    {
        return $this->NoContent();
    }

    public function Delete($id)
    {
        $this->method = 'DELETE';
        $this->Authorization();
        $this->url = sprintf('%s/%s', $this->url, $id);

        return $this->init();
    }
}
