<?php

namespace PagueVeloz\Api\v1;

/**
 * Cep.php
 *
 *
 * @author Cristian B. dos Santos <cristian.deveng@gmail.com>
 * @copyright 2015
 * @version 1.0v
*/

use \PagueVeloz\ServiceProvider;
use \PagueVeloz\Api\InterfaceApi;
use \PagueVeloz\Service\Context\HttpRequest;


class Cep extends ServiceProvider implements InterfaceApi
{
	public function __construct()
	{
		$this->dto = $dto;
		$this->uri = '/v1/CEP';

		parent::__construct();

		return $this;
	}

	public function Get()
	{
		return $this->NoContent();
	}

	public function GetById($id)
	{
		$this->method = 'GET';

		$this->url = sprintf('%s/%s', $this->url, $id);

		return $this->init();
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
