<?php

namespace PagueVeloz;

use PagueVeloz\Api\Common\Auth;
use PagueVeloz\Exception\UrlCartaoNotSetException;
use PagueVeloz\Exception\UrlNotSetException;
use PagueVeloz\Service\Context\HttpResponse;
use PagueVeloz\Service\Machine\Curl;

abstract class ServiceProvider extends Curl
{
    protected $uri;
    protected $auth;
    protected $dto;
    protected $isOperationCartao = false;

    public function __construct()
    {
        if (empty(PagueVeloz::$url)) {
            throw new UrlNotSetException();
        }

        if ($this->isOperationCartao && empty(PagueVeloz::$urlCartao)) {
            throw new UrlCartaoNotSetException();
        }

        $this->ssl = true;
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
        if (is_string($value) && $value == '[]') {
            return true;
        }

        return empty($value);
    }
}
