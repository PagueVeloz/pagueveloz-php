<?php

namespace PagueVeloz;

use TestCase;

class ServiceProviderTest extends TestCase
{
    public $mock;

    public function setUp()
    {
        parent::setUp();
        $this->mock = new ServiceProviderSub(getenv('PAGUEVELOZ_SANDBOX_URL'));
    }

    public function isEmptyProvider()
    {
        return [
            ['', true],
            [null, true],
            [0, true],
            ['0', true],
            ['null', false],
            ['abc', false],
        ];
    }

    /**
     * @dataProvider isEmptyProvider
     */
    public function testIsEmpty($value, $result)
    {
        $this->assertEquals($this->mock->isEmpty($value), $result);
    }
}
