<?php

namespace PagueVeloz;

use TestCase;

class PagueVelozTest extends TestCase
{
    public $obj;

    public function setUp()
    {
        $this->obj = new PagueVelozSub;
    }

    public function testHasServicesAvailable() {
        $this->assertNotEmpty($this->obj->Get());
    }
}
