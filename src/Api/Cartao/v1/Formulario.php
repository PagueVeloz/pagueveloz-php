<?php

namespace PagueVeloz\Api\Cartao\v1;

/**
 * Formulario.php
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

class Formulario extends ServiceProvider implements InterfaceApi
{

	public function __construct()
	{
		$this->uri = '/v1/Formulario';
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
