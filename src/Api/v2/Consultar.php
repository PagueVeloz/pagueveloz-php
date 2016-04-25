<?php

namespace PagueVeloz\Api\v2;

/*
 * Consultar.php
 *
 *
 * @author Cristian B. dos Santos <cristian.deveng@gmail.com>
 * @copyright 2015
 * @version 1.0v
*/

use PagueVeloz\Api\InterfaceApi;
use PagueVeloz\Api\v2\Dto\ConsultarDTO;
use PagueVeloz\ServiceProvider;

class Consultar extends ServiceProvider implements InterfaceApi
{

    const TIPO_BANCOS                           = 0;
    const TIPO_CLIENTES                         = 1;
    const TIPO_CLIENTESBOLETO                   = 2;
    const TIPO_CLIENTEJACADASTRADO              = 3;
    const TIPO_SMSTELEFONEDESTINO               = 4;
    const TIPO_SMSTELEFONEREMETENTE             = 5;
    const TIPO_CONTASPAGUEVELOZ                 = 6;
    const TIPO_CONTASPAGUEVELOZDEPOSITO         = 7;
    const TIPO_STATUSDOCUMENTOFINANCEIRO        = 8;
    const TIPO_STATUSSOLICITACAOPAGAMENTOCARTAO = 9;
    const TIPO_TIPOCONTA                        = 10;
    const TIPO_TIPOCONTABANCARIA                = 11;
    const TIPO_TIPOTITULARCONTABANCARIA         = 12;
    const TIPO_TIPOPESSOA                       = 13;
    const TIPO_STATUSCONTABANCARIA              = 14;
    const TIPO_PERMISSAODEUSUARIO               = 15;
    const TIPO_EXTRATODATAORDEM                 = 16;
    const TIPO_TELEFONETIPO                     = 17;
    const TIPO_TIPOCOMPRACREDITO                = 18;

    public function __construct(ConsultarDTO $dto)
    {
        $this->dto = $dto;
        $this->uri = '/v2/Consultar';

        parent::__construct();

        return $this;
    }

    public function Get()
    {
        return $this->NoContent();
    }

    public function GetById($id)
    {
        $this->method = 'GET';
        $this->Authorization();
        $this->url = sprintf('%s/%s', $this->url, $id);

        return $this->init();
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

    public function GetContasDeposito()
    {
        $this->url = $this->url.'/ContasPagueVelozDeposito';

        $this->method = 'GET';
        $this->Authorization();

        return $this->init();
    }

    public function GetByTipo($tipo)
    {
        $this->url = $this->url.'?tipo='.$tipo;

        $this->method = 'GET';
        $this->Authorization();

        return $this->init();
    }
}
