<?php

namespace PagueVeloz\Api\v3;

use PagueVeloz\Api\InterfaceApi;
use PagueVeloz\Api\v3\Dto\ClienteDTO;
use PagueVeloz\Api\v3\Dto\DocumentoDoClienteDTO;
use PagueVeloz\Service\Context\HttpRequest;
use PagueVeloz\ServiceProvider;
use PagueVeloz\Exception\NotImplementedException;

/*
 * @author Cristian B. dos Santos <cristian.deveng@gmail.com>
 * @copyright BLudata Software 2016
*/
class Cliente extends ServiceProvider implements InterfaceApi
{
    protected $documentoDoClienteDTO;

    public function __construct(ClienteDTO $dto,DocumentoDoClienteDTO $documentoDoClienteDTO)
    {
        $this->dto = $dto;
        $this->documentoDoClienteDTO = $documentoDoClienteDTO;
        $this->uri = '/v3/Cliente';

        parent::__construct();

        return $this;
    }

    public function documentoDoClienteDTO()
    {
        return $this->documentoDoClienteDTO;
    }

    public function Get()
    {
        $this->method = 'GET';
        $this->Authorization();

        return $this->init();
    }

    public function GetById($id)
    {
        throw new NotImplementedException;

    }

    public function GetStatus()
    {
        $this->method = 'GET';
        $this->Authorization();
        $this->url = sprintf('%s/Status', $this->url);

        return $this->init();
    }

    public function GetDocumentosPendentes()
    {
        $this->method = 'GET';
        $this->Authorization();
        $this->url = sprintf('/%s/DocumentosPendentes', $this->url);

        return $this->init();
    }

    public function PutDocumentosPendentes()
    {
        $this->method = 'PUT';
        $this->Authorization();
        $this->url = sprintf('/%s/DocumentosPendentes', $this->url);

        $request = new HttpRequest();

        $request->body = $this->dto->getRequest();

        return $this->init($request);
    }

    public function GetDocumentosEnviados($id)
    {
        $this->method = 'GET';
        $this->Authorization();
        $this->url = sprintf('/%s/DocumentosEnviados/%s/Baixar', $this->url, $id);

        return $this->init();
    }

    public function Post()
    {
        throw new NotImplementedException;
    }

    public function Put($id = null)
    {
        if ($this->isEmpty($this->dto->getRequest())) {
            throw new \Exception('Erro ao montar request');
        }

        $this->Authorization();
        $request = new HttpRequest();

        $request->body = $this->dto->getRequest();
        $this->method = 'PUT';

        return $this->init($request);
    }

    public function Delete($id)
    {
        throw new NotImplementedException;

    }
}
