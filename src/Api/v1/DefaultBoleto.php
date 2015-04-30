<?php

namespace PagueVeloz\Api\v1;

/**
 * DefaultBoleto.php
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
use \PagueVeloz\Api\v1\Dto\DefaultBoletoDTO;

class DefaultBoleto extends ServiceProvider implements InterfaceApi
{
	public function __construct(DefaultBoletoDTO $dto)
	{

		$this->dto = $dto;
		$this->uri = '/v1/DefaultBoleto';

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
		return $this->NoContent();
	}
	
	public function Delete($id)
	{
		$this->method = 'DELETE';
		$this->Authorization();
		$this->url = sprintf('%s/%s', $this->url, $id);

		return $this->init();
	}
	
}
