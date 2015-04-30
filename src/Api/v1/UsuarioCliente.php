<?php

namespace PagueVeloz\Api\v1;

/**
 * UsuarioCliente.php
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
use \PagueVeloz\Api\v1\Dto\UsuarioClienteDTO;

class UsuarioCliente extends ServiceProvider implements InterfaceApi
{
	public function __construct(UsuarioClienteDTO $dto)
	{
		$this->dto = $dto;
		$this->uri = '/v1/UsuarioCliente';

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
		return $this->NoContent();
	}
	
	public function Put()
	{
		return $this->NoContent();
	}
	
	public function Delete($id)
	{
		return $this->NoContent();
	}
	
}
