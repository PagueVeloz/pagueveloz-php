<?php

namespace PagueVeloz;

use TestCase;

class LogProviderTest extends TestCase {

    protected $mock;

    public function setUp() {
        parent::setUp();
        $this->mock = new ChildMockLogProvider();
    }

    public function messagesProvider() {
      return [
        ['this is the first log message'],
        ['this is the second log message'],
        ['this is the third log message'],
      ];
    }

    /**
     * @dataProvider messagesProvider
     */
    public function testInfo($message) {
        $this->mock->Info($message);
        $stream = $this->mock->CurrentStream();
        $content = file_get_contents($stream);
        $this->assertGreaterThan(-1, strpos($content, $message));
    }

    /**
     * @dataProvider messagesProvider
     */
    public function testError($message) {
        $this->mock->Info($message);
        $stream = $this->mock->CurrentStream();
        $content = file_get_contents($stream);
        $this->assertGreaterThan(-1, strpos($content, $message));
    }

}

/*
 * ChildMockLogProvider
 */
class ChildMockLogProvider extends LogProvider {
}
