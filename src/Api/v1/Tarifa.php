<?php

namespace PagueVeloz\Api\v1;

/**
 * Tarifa.php
 *
 *
 * @author Cristian B. dos Santos <cristian.deveng@gmail.com>
 * @copyright 2015
 * @version 1.0v
*/

use \PagueVeloz\ServiceProvider;
use \PagueVeloz\Api\InterfaceApi;
use \PagueVeloz\Service\Context\HttpRequest;
use \PagueVeloz\Api\Common\Auth;

class Tarifa extends ServiceProvider implements InterfaceApi
{
	const TIPO_NAODEFINIDO           = 0;
	const TIPO_BOLETOEMISSAO         = 1;
	const TIPO_BOLETOLIQUIDACAO      = 2;
	const TIPO_SAQUE                 = 3;
	const TIPO_NAOTARIFAR            = 4;
	const TIPO_TRANSFERENCIAEFETUADA = 5;
	const TIPO_TRANSFERENCIARECEBIDA = 6;
	const TIPO_DEPOSITORECEBIDO      = 7;
	const TIPO_PAGAMENTODECONTA      = 8;
	const TIPO_BOLETOBAIXAMANUAL     = 9;

	public function __construct()
	{

		$this->uri = '/v1/Tarifa';

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

	public function CalcularByTipo($tipo, $valor)
	{
		$this->url = sprintf('%s/Calcular?tipo=%s&valor=%01.2f',$this->url,$tipo,$valor);

		$this->method = 'GET';
		$this->Authorization();

		return $this->init();
	}

	public function Post()
	{
		return $this->NoContent();
	}

	public function Put($id)
	{
		return $this->NoContent();
	}

	public function Delete($id)
	{
		return $this->NoContent();
	}

}
