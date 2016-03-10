<?php

namespace PagueVeloz;

/*
 * PagueVeloz.php
 *
 *
 * @author Cristian B. dos Santos <cristian.deveng@gmail.com>
 * @copyright 2015
 * @version 1.0v
*/
use PagueVeloz\Api\Common\Auth;
use PagueVeloz\PagueVeloz;
use PagueVeloz\Service\Context\HttpResponse;
use PagueVeloz\Service\Machine\Curl;

abstract class ServiceProvider extends Curl
{
    protected $uri = null;
    protected $auth = null;
    protected $dto = null;
    protected $isOperationCartao = false;

    public function __construct()
    {
        if (empty(PagueVeloz::$url)) {
            throw new \Exception('Favor informar a URL do PagueVeloz', 1);
        }

        if ($this->isOperationCartao && empty(PagueVeloz::$urlCartao)) {
            throw new \Exception('Favor informar a URL do Cartão PagueVeloz', 1);
        }

        $this->ssl = true;
        $this->log = true;
        $this->proxy = false;

        if (!$this->isOperationCartao) {
            $this->host = PagueVeloz::$url;
            $this->url = PagueVeloz::$url.$this->uri;
        } else {
            $this->host = PagueVeloz::$urlCartao;
            $this->url = PagueVeloz::$urlCartao.$this->uri;
        }

        $this->auth = new Auth();

        $this->Expect();
        $this->headers['Content-Type'] = 'Content-Type: application/json';
    }

    protected function NoContent()
    {
        $response = new HttpResponse();

        $response->status = 204;
        $response->body = json_encode(['Não implementado']);

        return $response;
    }

    protected function Authorization()
    {
        $this->headers['Authorization'] = $this->auth->getAuthorization();
    }

    protected function Expect()
    {
        $this->headers['Expect'] = 'Expect: 100-continue';
    }

    public function isEmpty($value)
    {
        $verify = $value;

        return empty($verify);
    }
}
