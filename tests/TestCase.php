<?php

use Faker\Factory;
use PagueVeloz\PagueVeloz;

class TestCase extends PHPUnit_Framework_TestCase
{
    /**
     * @var Factory
     */
    protected $faker;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $url = getenv('PAGUEVELOZ_SANDBOX_URL');
        PagueVeloz::Url($url);

        $this->faker = Factory::create('pt_BR');
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }
}
