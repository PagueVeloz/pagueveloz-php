<?php

namespace PagueVeloz\Api\v1;

/**
 * Cliente.php
 * 
 * 
 * @author Cristian B. dos Santos <cristian.deveng@gmail.com>
 * @copyright 2015
 * @version 1.0v
*/

use \PagueVeloz\ServiceProvider;
use \PagueVeloz\Api\InterfaceApi;
use \PagueVeloz\Service\Context\HttpRequest;

use \PagueVeloz\Api\v1\Dto\ClienteDTO;
use \PagueVeloz\Api\Common\Auth;

class Cliente extends ServiceProvider implements InterfaceApi
{
	public function __construct(ClienteDTO $dto)
	{
	
		$this->dto = $dto;
		$this->uri = '/v1/Cliente';

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
	
	public function Post()
	{
		return $this->NoContent();
	}
	
	public function Put($id = NULL)
	{

		if ($this->isEmpty($this->dto->getRequest()))
			throw new \Exception("Erro ao montar request", 1);
		
		$this->Authorization();
		$request = new HttpRequest;
		
		$request->body = $this->dto->getRequest();
		$this->method = 'PUT';

		return $this->init($request);
	}
	
	public function Delete($id)
	{
		return $this->NoContent();
	}
	
}
