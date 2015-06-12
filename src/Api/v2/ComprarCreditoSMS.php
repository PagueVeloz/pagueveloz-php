<?php

namespace PagueVeloz\Api\v2;

/**
 * ComprarCreditoSMS.php
 *
 *
 * @author Cristian B. dos Santos <cristian.deveng@gmail.com>
 * @copyright 2015
 * @version 1.0v
*/

use \PagueVeloz\ServiceProvider;
use \PagueVeloz\Api\InterfaceApi;
use \PagueVeloz\Api\v2\Dto\ComprarCreditoSMSDTO;
use \PagueVeloz\Service\Context\HttpRequest;

class ComprarCreditoSMS extends ServiceProvider implements InterfaceApi
{

	public function __construct(ComprarCreditoSMSDTO $dto)
	{

		$this->dto = $dto;
		$this->uri = '/v2/ComprarCreditoSMS';

		parent::__construct();

		return $this;
	}

	public function Get()
	{
		return $this->NoContent();
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
