<?php

namespace PagueVeloz\Api\v2;

/**
 * Consultar.php
 *
 *
 * @author Cristian B. dos Santos <cristian.deveng@gmail.com>
 * @copyright 2015
 * @version 1.0v
*/

use \PagueVeloz\ServiceProvider;
use \PagueVeloz\Api\InterfaceApi;
use \PagueVeloz\Service\Context\HttpRequest;
use \PagueVeloz\Api\v2\Dto\ConsultarDTO;

class Consultar extends ServiceProvider implements InterfaceApi
{

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

	public function Put($id = NULL)
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

}
