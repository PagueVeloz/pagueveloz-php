<?php

namespace PagueVeloz;

use TestCase;

class PagueVelozTest extends TestCase
{
    public $mock;

    public function setUp(){
        parent::setUp();
        $this->mock = new ChildMockPagueVeloz(getenv('SANDBOX_URL'));
    }

    public function testHasServicesAvailable() {
        $this->assertAttributeNotEmpty('servicesAvailable', $this->mock);
    }

    public function testCanSetUrl() {
        $url = getenv('SANDBOX_URL');
        $this->mock->url = $url;
        $this->assertEquals($url, $this->mock->url);
    }
    
    public function testCanSetUrlCartao() {
        $urlCartao = getenv('SANDBOX_URL');
        $this->mock->urlCartao = $urlCartao;
        $this->assertEquals($urlCartao, $this->mock->urlCartao);
    }

    public function testApiVersion() {
        $version = $this->faker->numerify('v#');
        $this->mock->ApiVersion($version);
        $this->assertAttributeEquals($version, 'version', $this->mock);
    }

    public function testUrl() {
        $this->markTestSkipped('Não implementado');
    }

    public function testUrlCartao() {
        $this->markTestSkipped('Não implementado');
    }

    public function testIsLog() {
        $isLog = $this->faker->boolean;
        $this->mock->isLog($isLog);
        $this->assertAttributeEquals($isLog, 'isLog', $this->mock);
    }
}

/**
 * ChildMockPagueVeloz
 */
class ChildMockPagueVeloz extends PagueVeloz {
}
