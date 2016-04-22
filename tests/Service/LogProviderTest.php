<?php

namespace PagueVeloz;

use TestCase;

class LogProviderTest extends TestCase {

    protected $mock;

    public function setUp() {
        $this->mock = new ChildMockLogProvider();
    }

    public function testInfo() {
        $message = $this->faker->text;
        $this->mock->Info($message);
        $this->assertGreaterThan(strpos($_SESSION[$this->mock->LAST_LOG_SESSION_KEY], $message),-1);
    }

    public function testError() {
        $message = $this->faker->text;
        $this->mock->Error($message);
        $this->assertGreaterThan(strpos($_SESSION[$this->mock->LAST_LOG_SESSION_KEY], $message),-1);
    }

}

/*
 * ChildMockLogProvider
 */
class ChildMockLogProvider extends LogProvider {

    public function __construct() {
        $this->debug = true;
    }

}
