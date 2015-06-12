<?php

namespace PagueVeloz\Api\v1;

/**
 * Assinar.php
 *
 *
 * @author Cristian B. dos Santos <cristian.deveng@gmail.com>
 * @copyright 2015
 * @version 1.0v
*/


use \PagueVeloz\ServiceProvider;
use \PagueVeloz\Api\InterfaceApi;
use \PagueVeloz\Api\v1\Dto\AssinarDTO;
use \PagueVeloz\Service\Context\HttpRequest;

class Assinar extends ServiceProvider implements InterfaceApi
{

	public function __construct(AssinarDTO $dto)
	{

		$this->dto = $dto;
		$this->uri = '/v1/Assinar';

		parent::__construct();

		return $this;
	}

	public function Get()
	{

	}

	public function GetById($id)
	{

	}

	public function Post()
	{
		if ($this->isEmpty($this->dto->getRequest()))
			throw new \Exception("Erro ao montar request", 1);

		$request = new HttpRequest;

		$request->body = $this->dto->getRequest();
		$this->method = 'POST';

		return $this->init($request);
	}

	public function Put($id = NULL)
	{

	}

	public function Delete($id)
	{

	}

}
