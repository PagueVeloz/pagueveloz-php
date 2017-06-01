<?php

namespace PagueVeloz\Api\v3;

use PagueVeloz\Api\InterfaceApi;
use PagueVeloz\Api\v3\Dto\ClienteDTO;
use PagueVeloz\Api\v3\Dto\DocumentoDoClienteDTO;
use PagueVeloz\Exception\NotImplementedException;
use PagueVeloz\Service\Context\HttpRequest;
use PagueVeloz\ServiceProvider;

/*
 * @author Cristian B. dos Santos <cristian.deveng@gmail.com>
 * @copyright BLudata Software 2016
*/
class Cliente extends ServiceProvider implements InterfaceApi
{
    protected $dtoDocumentoDoCliente;

    public function __construct(ClienteDTO $dto, DocumentoDoClienteDTO $dtoDocumentoDoCliente)
    {
        $this->dto = $dto;
        $this->dtoDocumentoDoCliente = $dtoDocumentoDoCliente;
        $this->uri = '/v3/Cliente';

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
        $this->url = sprintf('%s/DocumentosPendentes', $this->url);

        return $this->init();
    }

    public function PutSolicitaPaginaAdicional($id)
    {
        $this->method = 'PUT';
        $this->Authorization();
        $this->url = sprintf('%s/DocumentosPendentes/%s/SolicitarPaginaAdicional', $this->url, $id);
        $request = new HttpRequest();

        $request->body = '';

        return $this->init($request);
    }

    public function PutDocumentosPendentes(array $dto)
    {
        $url = $this->url;

        $firstDto = array_shift($dto);

        $dto = array_map(function ($element) use ($url) {
            if (!$element instanceof DocumentoDoClienteDTO) {
                throw new \Exception('Objeto inválido', 1);
            }

            $this->url = $url;
            $response = $this->PutSolicitaPaginaAdicional($element->Id);

            if (!in_array($response->status, [200, 201])) {
                throw new \Exception('Problema ao criar pagina adicional', 1);
            }

            $paginaAdicional = json_decode($response->body);

            $element->Id = $paginaAdicional->Id;

            return json_decode($element->getRequest());
        }, $dto);

        array_push($dto, json_decode($firstDto->getRequest()));

        $this->method = 'PUT';
        $this->Authorization();
        $this->url = sprintf('%s/DocumentosPendentes', $url);

        $request = new HttpRequest();

        $request->body = $dto;

        return $this->init($request);
    }

    public function GetDocumentosEnviados($id)
    {
        $this->method = 'GET';
        $this->Authorization();
        $this->url = sprintf('%s/DocumentosEnviados/%s/Baixar', $this->url, $id);

        return $this->init();
    }

    public function GetTermoChargebackCartao()
    {
        $this->method = 'GET';
        $this->Authorization();
        $this->url = sprintf('%s/TermoChargebackCartao/Baixar', $this->url);

        return $this->init();
    }

    public function Post()
    {
        throw new NotImplementedException();
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
        throw new NotImplementedException();
    }
}
