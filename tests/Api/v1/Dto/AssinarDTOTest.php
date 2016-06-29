<?php

namespace PagueVeloz\Api\v1\Dto;

use TestCase;
use PagueVeloz\Api\Common\Dto\TelefoneDTO;

class AssinarDTOTest extends TestCase
{
    protected $dto;

    public function setUp()
    {
        parent::setUp();

        $this->dto = new AssinarDTO();
    }

    public function testGetNotEmpty()
    {
        $this->assertTrue(is_array($this->dto->getNotEmpty()));
    }

    public function testGetDTOTelefone()
    {
        $this->assertInstanceOf(TelefoneDTO::class, $this->dto->getDTOTelefone());
    }

    public function testSetNome()
    {
        $nome = $this->faker->postcode;

        $this->dto->setNome($nome);

        $this->assertAttributeEquals($nome, 'Nome', $this->dto);

        return $nome;
    }

    /**
     * @depends testSetNome
     */
    public function testGetNome($nome)
    {
        $this->dto->setNome($nome);

        $this->assertEquals($nome, $this->dto->getNome());
    }

    public function testSetDocumento()
    {
        $documento = $this->faker->uuid;

        $this->dto->setDocumento($documento);

        $this->assertAttributeEquals($documento, 'Documento', $this->dto);

        return $documento;
    }

    /**
     * @depends testSetDocumento
     */
    public function testGetDocumento($documento)
    {
        $this->dto->setDocumento($documento);

        $this->assertEquals($documento, $this->dto->getDocumento());
    }

    public function testSetTipoPessoa()
    {
        $tipoPessoa = $this->faker->randomElement([0, 1, 2]);

        $this->dto->setTipoPessoa($tipoPessoa);

        $this->assertAttributeEquals($tipoPessoa, 'TipoPessoa', $this->dto);

        return $tipoPessoa;
    }

    /**
     * @depends testSetTipoPessoa
     */
    public function testGetTipoPessoa($tipoPessoa)
    {
        $this->dto->setTipoPessoa($tipoPessoa);

        $this->assertEquals($tipoPessoa, $this->dto->getTipoPessoa());
    }

    public function testSetLoginUsuarioDefault()
    {
        $loginUsuarioDefault = $this->faker->userName;

        $this->dto->setLoginUsuarioDefault($loginUsuarioDefault);

        $this->assertAttributeEquals($loginUsuarioDefault, 'LoginUsuarioDefault', $this->dto);

        return $loginUsuarioDefault;
    }

    /**
     * @depends testSetLoginUsuarioDefault
     */
    public function testGetLoginUsuarioDefault($loginUsuarioDefault)
    {
        $this->dto->setLoginUsuarioDefault($loginUsuarioDefault);

        $this->assertEquals($loginUsuarioDefault, $this->dto->getLoginUsuarioDefault());
    }

    public function testSetEmail()
    {
        $email = $this->faker->freeEmail;

        $this->dto->setEmail($email);

        $this->assertAttributeEquals($email, 'Email', $this->dto);

        return $email;
    }

    /**
     * @depends testSetEmail
     */
    public function testGetEmail($email)
    {
        $this->dto->setEmail($email);

        $this->assertEquals($email, $this->dto->getEmail());
    }

    public function testSetUrlNotificacao()
    {
        $url = $this->faker->url;

        $this->dto->setUrlNotificacao($url);

        $this->assertAttributeEquals($url, 'UrlNotificacao', $this->dto);

        return $url;
    }

    /**
     * @depends testSetUrlNotificacao
     */
    public function testGetUrlNotificacao($url)
    {
        $this->dto->setUrlNotificacao($url);

        $this->assertEquals($url, $this->dto->getUrlNotificacao());
    }

    public function testSetId()
    {
        $id = $this->faker->randomNumber;

        $this->dto->setId($id);

        $this->assertAttributeEquals($id, 'Id', $this->dto);

        return $id;
    }

    /**
     * @depends testSetId
     */
    public function testGetId($id)
    {
        $this->dto->setId($id);

        $this->assertEquals($id, $this->dto->getId());
    }
}
