<?php

namespace PagueVeloz\Api\v1;

/**
 * Extrato.php
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

class Extrato extends ServiceProvider implements InterfaceApi
{
	public function __construct()
	{

		$this->uri = '/v1/Extrato';

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

	public function GetByPeriodo($dtInicial, $dtFinal)
	{

		$_inicio = new \DateTime($dtInicial);
		$_final  = new \DateTime($dtFinal);

		$this->method = 'GET';
		$this->Authorization();

		$this->url = sprintf('%s/%s/%s', $this->url, $_inicio->format('Y-m-d'), $_final->format('Y-m-d'));

		return $this->init();
	}

	public function Post()
	{
		return $this->NoContent();
	}

	public function Put($id = NULL)
	{
		return $this->NoContent();
	}

	public function Delete($id)
	{
		return $this->NoContent();
	}

}
