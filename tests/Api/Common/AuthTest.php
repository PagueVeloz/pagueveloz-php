<?php

namespace PagueVeloz\Api\Common;

use TestCase;

class AuthTest extends TestCase
{
    /**
     * @var Auth
     */
    protected $auth;

    protected function setUp()
    {
        $this->auth = new Auth();

        parent::setUp();
    }

    public function testSetEmail()
    {
        $email = $this->faker->bothify("#?#?#?#?#?#?#?#?#@gmail.com");

        $this->auth->setEmail($email);

        $this->assertAttributeEquals($email, 'Email', $this->auth);

        return $email;
    }

    /**
     * @depends testSetEmail
     */
    public function testGetEmail($email)
    {
        $this->auth->setEmail($email);

        $this->assertEquals($email, $this->auth->getEmail());
    }

    public function testSetSenha()
    {
        $senha = $this->faker->password;

        $this->auth->setSenha($senha);

        $this->assertAttributeEquals($senha, 'Senha', $this->auth);

        return $senha;
    }

    /**
     * @depends testSetSenha
     */
    public function testGetSenha($senha)
    {
        $this->auth->setSenha($senha);

        $this->assertEquals($senha, $this->auth->getSenha());
    }

    public function testSetToken()
    {
        $token = $this->faker->uuid;

        $this->auth->setToken($token);

        $this->assertAttributeEquals($token, 'Token', $this->auth);

        return $token;
    }

    /**
     * @depends testSetToken
     */
    public function testGetToken($token)
    {
        $this->auth->setToken($token);

        $this->assertEquals($token, $this->auth->getToken());
    }

    public function authorizationProvider()
    {
        return [
            ['test@example.com', 'test', 'dGVzdEBleGFtcGxlLmNvbTp0ZXN0'],
            ['test1@example.com', 'test1', 'dGVzdDFAZXhhbXBsZS5jb206dGVzdDE='],
            ['test2@example.com', 'test2', 'dGVzdDJAZXhhbXBsZS5jb206dGVzdDI='],
            ['test3@example.com', 'test3', 'dGVzdDNAZXhhbXBsZS5jb206dGVzdDM='],
        ];
    }

    /**
     * @dataProvider authorizationProvider
     */
    public function testGetAuthorization($email, $token, $authorization)
    {
        $this->auth->setEmail($email);
        $this->auth->setToken($token);
        $this->assertEquals($this->auth->getAuthorization(), 'Authorization: Basic '.$authorization);
    }

    /**
     * @dataProvider authorizationProvider
     */
    public function testGetAuthorizationCartao($email, $token, $authorization)
    {
        $this->auth->setEmail($email);
        $this->auth->setToken($token);
        $this->assertEquals($this->auth->getAuthorizationCartao(), 'Authorization: Chave '.$authorization);
    }
}
