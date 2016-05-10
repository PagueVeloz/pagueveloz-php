<?php

namespace PagueVeloz\Service\Machine;

use TestCase;
use PagueVeloz\Service\Context\HttpRequest;
use PagueVeloz\Service\Context\HttpResponse;

class CurlTest extends TestCase {

    protected $curl;

    public function setUp()
    {
        $this->curl = new CurlSub;
        $this->curl->ssl = true;
        $this->curl->method =  'GET';
        $this->curl->url =  'https://sandbox.pagueveloz.com.br/api/v1/CEP/89050100';
    }

    public function testInit()
    {
        $response = $this->curl->init();
        $this->assertInstanceOf( 'PagueVeloz\Service\Context\HttpResponse', $response);
        return $response;
    }

    public function testInitWithProxy()
    {
        $this->curl->proxy = true;
        $response = $this->curl->init();
        $this->assertInstanceOf( 'PagueVeloz\Service\Context\HttpResponse', $response);
        return $response;
    }

    public function testInitWithUrlReferer()
    {
        $this->curl->urlReferer = 'http://localhost';
        $response = $this->curl->init();
        $this->assertInstanceOf( 'PagueVeloz\Service\Context\HttpResponse', $response);
        return $response;
    }

    public function testBody()
    {
        $body = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse impedit sequi dolorum cumque saepe sint ex minima nam numquam architecto, nostrum, possimus sunt obcaecati, iusto corporis! Ullam eum omnis cupiditate.';
        $this->curl->request = $body;
        $this->assertNotEmpty($this->curl->body(), $body);
    }

    public function testBodyWithProxy()
    {
        $body = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse impedit sequi dolorum cumque saepe sint ex minima nam numquam architecto, nostrum, possimus sunt obcaecati, iusto corporis! Ullam eum omnis cupiditate.';
        $this->curl->request = $body;
        $this->curl->proxy = true;
        $this->assertNotEmpty($this->curl->body(), $body);
    }

    public function testHeaders()
    {
        $this->curl->request = 'Host: www.example.com'
            . "\r\n\r\n"
            . 'Content-Type: application/x-www-form-urlencoded; charset=utf-8';
        $headers = $this->curl->headers();
        $this->assertInternalType('array', $headers);
        $this->assertGreaterThan(0, count($headers));
    }
}