<?php

namespace PagueVeloz\Api\v3;

/**
 * Boleto.php
 *
 *
 * @author Cristian B. dos Santos <cristian.deveng@gmail.com>
 * @copyright 2015
 * @version 1.0v
*/

use \PagueVeloz\ServiceProvider;
use \PagueVeloz\Api\InterfaceApi;
use \PagueVeloz\Api\v3\Dto\BoletoDTO;
use \PagueVeloz\Service\Context\HttpRequest;

class Boleto extends ServiceProvider implements InterfaceApi
{
	public function __construct(BoletoDTO $dto)
	{

		$this->dto = $dto;

		$this->uri = '/v3/Boleto';

		parent::__construct();

		return $this;

	}

	public function Get()
	{
		$this->method = 'GET';
		$this->Authorization();

		$filters = $this->filters();

		if (!empty($filters))
			$this->url = sprintf('%s/%s', $this->url, $filters);
		else
			$this->url = sprintf('%s/?Status=%s', $this->url, 0);


		return $this->init();
	}

	public function GetById($id)
	{
		$this->method = 'GET';
		$this->Authorization();

		$this->url = sprintf('%s/?SeuNumero=%s', $this->url, $id);

		return $this->init();

	}

	public function GetByPeriodo($dtInicial, $dtFinal,$status = 0)
	{
		$_inicio = new \DateTime($dtInicial);
		$_final  = new \DateTime($dtFinal);

		$this->method = 'GET';
		$this->Authorization();

		$this->url = sprintf('%s/?DataInicio=%s&DataFim=%s&Status=%s', $this->url, $_inicio->format('Y-m-d'), $_final->format('Y-m-d'), $status);

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
		return $this->NoContent();
	}

	private function filters()
	{
		$seuNumero     = $this->dto->getSeuNumero();
		$dataPagamento = $this->dto->getDataPagamento();
		$status        = $this->dto->getStatus();

		$filters = array();

		if (!empty($seuNumero))
			$filters[] = sprintf('SeuNumero=%s',$seuNumero);

		if (!empty($dataPagamento))
		{
			//$dataPagamento = implode('-', array_reverse(explode('/', $dataPagamento)));
			//$dataPagamento = new \DateTime($dataPagamento);
			//$filters[] = sprintf('DataInicio=%s&DataFim=%s',$dataPagamento->format('Y-m-d'),$dataPagamento->format('Y-m-d'));
			$filters[] = sprintf('DataInicio=%s&DataFim=%s',$dataPagamento, $dataPagamento);
		}

		if (!empty($status))
			$filters[] = sprintf('Status=%s',$status);


		return !empty($filters)?'?'.implode('&', $filters):null;
	}

}
