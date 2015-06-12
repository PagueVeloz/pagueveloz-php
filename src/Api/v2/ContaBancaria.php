<?php

namespace PagueVeloz\Api\v2;

/**
 * ContaBancaria.php
 *
 *
 * @author Cristian B. dos Santos <cristian.deveng@gmail.com>
 * @copyright 2015
 * @version 1.0v
*/

use \PagueVeloz\ServiceProvider;
use \PagueVeloz\Api\InterfaceApi;
use \PagueVeloz\Service\Context\HttpRequest;
use \PagueVeloz\Api\v2\Dto\ContaBancariaDTO;

class ContaBancaria extends ServiceProvider implements InterfaceApi
{
	public function __construct(ContaBancariaDTO $dto)
	{

		$this->dto = $dto;
		$this->uri = '/v2/ContaBancaria';

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
		$this->method = 'GET';
		$this->Authorization();
		$this->url = sprintf('%s/%s', $this->url, $id);

		return $this->init();

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
		if ($this->isEmpty($this->dto->getRequest()))
			throw new \Exception("Erro ao montar request", 1);

		$this->Authorization();
		$request = new HttpRequest;

		$this->url = sprintf('%s?id=%s', $this->url, $id);
		$request->body = $this->dto->getRequest();
		$this->method = 'PUT';

		return $this->init($request);
	}

	public function Delete($id)
	{
		$this->method = 'DELETE';
		$this->Authorization();
		$this->url = sprintf('%s/%s', $this->url, $id);

		return $this->init();
	}

}
