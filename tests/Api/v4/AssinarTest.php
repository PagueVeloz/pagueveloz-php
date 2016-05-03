<?php

namespace PagueVeloz\Api\v4;

use TestCase;

use PagueVeloz\PagueVeloz;
use PagueVeloz\Api\v4\Dto\AssinarDTOTest;

class AssinarTest extends TestCase {

    protected $assinar;

    public function setUp()
    {
        parent::setUp();
        $version = 'v4';
        $this->assinar = PagueVeloz::Assinar($version);
    }

    public function testGet()
    {
        $response = $this->assinar->Get();
        $this->assertEquals(204, $response->status);
        $this->assertEquals('Content-type: application/json', $response->contentType);
        $this->assertNotEmpty($response->body);
    }

    public function testGetById()
    {
        $response = $this->assinar->GetById(1);
        $this->assertEquals(204, $response->status);
        $this->assertEquals('Content-type: application/json', $response->contentType);
        $this->assertNotEmpty($response->body);
    }

    public function testPost()
    {
        $dtoTest = new AssinarDTOTest;
        $dtoTest->setUp();

        $this->assinar->dto
            ->setNome($dtoTest->testSetNome())
            ->setDocumento($dtoTest->testSetDocumento())
            ->setTipoPessoa(1)
            ->setEmail($dtoTest->testSetEmail())
            ->setUsuario($dtoTest->testSetUsuario())
            ->setEndereco($dtoTest->testSetEndereco())
            ->setDataNascimento($dtoTest->testSetDataNascimento())
            ->setTelefones($dtoTest->testSetTelefones());

        $result = $this->assinar->Post();

        $responseObject = json_decode($result->body);
        $this->assertEquals('stdClass', get_class($responseObject), "Deve ser possível converter em objeto\n" . dr($responseObject));
        $this->assertObjectHasAttribute('Token', $responseObject, "Deve retornar o token\n" . dr($result->body));
        $this->assertEquals(201, $result->status, "Deve retornar status 201\n" . dr($result->body));
    }

    public function testPut()
    {
        $response = $this->assinar->Put(1);
        $this->assertEquals(204, $response->status);
        $this->assertEquals('Content-type: application/json', dr($response->contentType));
        $this->assertNotEmpty($response->body);
    }

    public function testDelete()
    {
        $response = $this->assinar->Delete(1);
        $this->assertEquals(204, $response->status);
        $this->assertEquals('Content-type: application/json', dr($response->contentType));
        $this->assertNotEmpty($response->body);
    }
}