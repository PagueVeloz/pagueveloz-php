<?php

namespace PagueVeloz\Api\Cartao\v1;

/**
 * Confirmacao.php
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
use \PagueVeloz\Api\Cartao\v1\Dto\ConfirmacaoDTO;

class Confirmacao extends ServiceProvider implements InterfaceApi
{

	public function __construct(ConfirmacaoDTO $dto)
	{
		$this->dto = $dto;
		$this->uri = '/VendaDigitada/v1/Confirmacao';
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
		return $this->NoContent();
	}

	public function Post()
	{
		if ($this->isEmpty($this->dto->getRequest()))
			throw new \Exception("Erro ao montar request", 1);

		$this->Authorization();
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
