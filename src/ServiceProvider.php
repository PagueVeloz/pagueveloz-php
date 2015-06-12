<?php

namespace PagueVeloz;

/**
 * PagueVeloz.php
 *
 *
 * @author Cristian B. dos Santos <cristian.deveng@gmail.com>
 * @copyright 2015
 * @version 1.0v
*/
use \PagueVeloz\PagueVeloz;
use \PagueVeloz\Service\Machine\Curl;
use \PagueVeloz\Api\Common\Auth;
use \PagueVeloz\Service\Context\HttpResponse;


abstract class ServiceProvider extends Curl
{

	protected $uri  = NULL;
	protected $auth = NULL;
	protected $dto  = NULL;

	public function __construct()
	{
		if (empty(PagueVeloz::$url))
			throw new \Exception("Favor informar a URL do Pague Veloz", 1);

		$this->ssl   = true;
		$this->log   = true;
		$this->proxy = false;
		$this->host  = PagueVeloz::$url;
		$this->url   = PagueVeloz::$url.$this->uri;

		$this->auth = new Auth;

		$this->headers[] = 'Content-Type: application/json';

	}

	protected function NoContent()
	{
		$response = new HttpResponse;

		$response->status = 204;
		$response->body = json_encode(array('Não implementado'));

		return $response;
	}


	protected function Authorization()
	{
		$this->headers[] = $this->auth->getAuthorization();
	}


	public function isEmpty($value)
	{
		$verify = $value;

		return empty($verify);
	}
}
