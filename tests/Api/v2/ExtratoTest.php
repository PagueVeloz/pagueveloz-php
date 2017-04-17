<?php

namespace PagueVeloz\Api\v1;

use TestCase;
use PagueVeloz\PagueVeloz;
use PagueVeloz\Api\v1\Dto\ExtratoDTOTest;

class ExtratoTest extends TestCase
{
    protected $extrato;

    public function setUp()
    {
        parent::setUp();
        $this->extrato = PagueVeloz::Extrato('v2');
    }

    public function testGet()
    {
        $this->extrato->auth = $this->auth();

        $response = $this->extrato->Get();

        $this->assertInstanceOf('PagueVeloz\Service\Context\HttpResponse', $response);
        $this->assertEquals(200, $response->status);
        $this->assertJson($response->body);
        $response = json_decode($response->body, true);
        $this->assertGreaterThan(0, count($response));
    }

    public function testGetByPeriodo()
    {
        $this->extrato->auth = $this->auth();

        $interval = new \DateInterval('P1D');
        $today = new \DateTime;
        $yesterday = clone $today;
        $yesterday->sub($interval);

        $response = $this->extrato->GetByPeriodo($yesterday->format('Y-m-d'), $today->format('Y-m-d'));

        $this->assertInstanceOf('PagueVeloz\Service\Context\HttpResponse', $response);
        $this->assertEquals(200, $response->status);
        $this->assertJson($response->body);
        $response = json_decode($response->body, true);
        $this->assertGreaterThan(0, count($response));
    }

    /**
     * @expectedException PagueVeloz\Exception\NotImplementedException
     */
    public function testPost()
    {
        $this->extrato->Post(1);
    }

    /**
     * @expectedException PagueVeloz\Exception\NotImplementedException
     */
    public function testPut()
    {
        $this->extrato->Put(1);
    }

    /**
     * @expectedException PagueVeloz\Exception\NotImplementedException
     */
    public function testDelete()
    {
        $this->extrato->Delete(1);
    }
}
