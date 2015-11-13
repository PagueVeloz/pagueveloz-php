<?php

namespace PagueVeloz\Api\Cartao\v1;

/**
 * Parcelamento.php
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
use \PagueVeloz\Api\Cartao\v1\Dto\ParcelamentoDTO;

class Parcelamento extends ServiceProvider implements InterfaceApi
{

	public function __construct(ParcelamentoDTO $dto)
	{
		$this->dto = $dto;
		$this->uri = '/v1/Parcelamento';
		$this->isOperationCartao = true;
		parent::__construct();

		return $this;
	}

	public function Get()
	{

		if (empty($this->dto->getBandeira()) || empty($this->dto->getValor()))
			throw new \Exception("Informe a bandeira e o valor que deseja parcelar", 1);

		$this->Authorization();

		$this->url = sprintf('%s?Bandeira=%s&valorServico=%01.2f', $this->url, $this->dto->getBandeira(), $this->dto->getValor());
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
		return $this->NoContent();
	}

	public function Delete($id)
	{
		return $this->NoContent();
	}
}
