<?php

namespace PagueVeloz\Api\Cartao\v1;

/**
 * Habilitado.php
 *
 *
 * @author Cristian B. dos Santos <cristian.deveng@gmail.com>
 * @copyright 2015
 * @version 1.0v
*/

use \PagueVeloz\PagueVeloz;
use \PagueVeloz\ServiceProvider;
use \PagueVeloz\Api\InterfaceApi;
use \PagueVeloz\Service\Context\HttpRequest;

class Habilitado extends ServiceProvider implements InterfaceApi
{

	public function __construct()
	{
		$this->uri = '/v1/Habilitado';
		$this->isOperationCartao = true;
		parent::__construct();

		return $this;
	}

	public function Get()
	{
		$this->Authorization();

		$this->method = 'GET';
		$this->Authorization();

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

	public function Put($id = NULL)
	{
		return $this->NoContent();
	}

	public function Delete($id)
	{
		return $this->NoContent();
	}
}
