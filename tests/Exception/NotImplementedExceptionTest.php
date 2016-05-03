<?php

namespace PagueVeloz\Exception;

use TestCase;

class NotImplementedExceptionTest extends TestCase {

    public function setUp()
    {
        $this->exception =  new NotImplementedException;
    }

    public function testThrow()
    {
        try {
            throw $this->exception;
        } catch (NotImplementedException $exception) {
            $this->assertContains('Não', (string) $exception);
            $this->assertContains('implementado', (string) $exception);
        }
    }

}