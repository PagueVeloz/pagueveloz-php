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
    
}

/**
 * ChildMockPagueVeloz
 */
class ChildMockPagueVeloz extends PagueVeloz {
    public function __construct($url){
        PagueVeloz::$url = $url;
    }
}
