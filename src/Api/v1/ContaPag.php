<?php

namespace PagueVeloz\Api\v1;

/**
 * ContaPag.php
 *
 *
 * @author Cristian B. dos Santos <cristian.deveng@gmail.com>
 * @copyright 2015
 * @version 1.0v
*/

use \PagueVeloz\ServiceProvider;
use \PagueVeloz\Api\InterfaceApi;
use \PagueVeloz\Service\Context\HttpRequest;

use \PagueVeloz\Api\v1\Dto\ContaPagDTO;
use \PagueVeloz\Api\Common\Auth;

class ContaPag extends ServiceProvider implements InterfaceApi
{
	public function __construct(ContaPagDTO $dto)
	{

		$this->dto = $dto;
		$this->uri = '/v1/Conta';

		parent::__construct();

		return $this;
	}

	public function Get()
	{
		$this->url = $this->url.'/Filtro';

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
		if ($this->isEmpty($this->dto->getRequest()))
			throw new \Exception("Erro ao montar request", 1);

		$request = new HttpRequest;

		$request->body = $this->dto->getRequest();
		$this->method = 'POST';
		$this->Authorization();

		return $this->init($request);
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
