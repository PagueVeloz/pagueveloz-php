<?php

namespace PagueVeloz;

use TestCase;

class PagueVelozTest extends TestCase
{
    public $mock;

    public function testHasServicesAvailable() {
        $this->assertNotEmpty(PagueVeloz::Get());
    }

    public function testHasVersion() {
        $this->assertNotEmpty(PagueVeloz::GetVersion());
    }

    public function testHasUrl() {
        $url = $this->faker->url;
        PagueVeloz::$url = $url;
        $this->assertNotEmpty((PagueVeloz::$url));
    }

    public function testHasUrlCartao() {
        $url = $this->faker->url;
        PagueVeloz::$urlCartao = $url;
        $this->assertNotEmpty((PagueVeloz::$urlCartao));
    }
}
