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
            $this->assertContains('não', $exception->getMessage());
            $this->assertContains('implementado', $exception->getMessage());
        }
    }

}