<?php

use Faker\Factory;
use PagueVeloz\PagueVeloz;
use PagueVeloz\Api\Common\Auth;

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

    /**
     * Return the email of the current user
     */
    protected function email()
    {
        return getenv('PAGUEVELOZ_SANDBOX_EMAIL');
    }

    /**
     * Return the token of the current user
     */
    protected function token()
    {
        return getenv('PAGUEVELOZ_SANDBOX_TOKEN');
    }

    /**
     * Get the current Auth instance
     * @return PagueVeloz\Api\Common\Auth
     */
    protected function auth()
    {
        $email = $this->email();
        $token = $this->token();

        $auth = new Auth;
        $auth->setEmail($email);
        $auth->setToken($token);

        return $auth;
    }
}
