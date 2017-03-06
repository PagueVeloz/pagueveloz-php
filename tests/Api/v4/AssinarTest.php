<?php

namespace PagueVeloz\Api\v4;

use TestCase;
use PagueVeloz\PagueVeloz;
use PagueVeloz\Api\v4\Dto\AssinarDTOTest;

class AssinarTest extends TestCase
{
    protected $assinar;

    public function setUp()
    {
        parent::setUp();
        $version = 'v4';
        $this->assinar = PagueVeloz::Assinar($version);
    }

    public function versionDataProvider()
    {
        return [
            ['v1'],
            ['v2'],
            ['v3'],
            ['v4'],
        ];
    }

    /**
     * @dataProvider versionDataProvider
     */
    public function testNew($version)
    {
        $object = PagueVeloz::Assinar($version);
        $class = 'PagueVeloz\Api\\'.$version.'\Assinar';
        $this->assertInstanceOf($class, $object);
    }

    /**
     * @expectedException PagueVeloz\Exception\NotImplementedException
     */
    public function testGet()
    {
        $this->assinar->Get();
    }

    /**
     * @expectedException PagueVeloz\Exception\NotImplementedException
     */
    public function testGetById()
    {
        $this->assinar->GetById(1);
    }

    /**
     * @expectedException Exception
     */
    public function testPostThrowExceptionIfNoParams()
    {
        $this->assinar->Post();
    }

    public function testPostHasPessoaFisica()
    {
        $dtoTest = new AssinarDTOTest();
        $dtoTest->setUp();

        $this->assinar->dto
            ->setNome($dtoTest->testSetNome())
            ->setDocumento($dtoTest->testSetDocumentoCPF())
            ->setTipoPessoa(1)
            ->setEmail($dtoTest->testSetEmail())
            ->setUsuario($dtoTest->testSetUsuario())
            ->setEndereco($dtoTest->testSetEndereco())
            ->setDataNascimento($dtoTest->testSetDataNascimento())
            ->setTelefones($dtoTest->testSetTelefones());

        $result = $this->assinar->Post();
        $this->assertTrue(in_array($result->status, [200, 201, 204]), $result->body, $result->body);
        $responseArray = json_decode($result->body, true);
        $this->assertInternalType('array', $responseArray, $result->body);
        $this->assertArrayHasKey('Token', $responseArray, $result->body);
    }

    public function testPostHasPessoaJuridica()
    {
        $dtoTest = new AssinarDTOTest();
        $dtoTest->setUp();

        $this->assinar->dto
            ->setNome($dtoTest->testSetNomeEmpresa())
            ->setDocumento($dtoTest->testSetDocumentoCNPJ())
            ->setTipoPessoa(2)
            ->setEmail($dtoTest->testSetEmail())
            ->setUsuario($dtoTest->testSetUsuario())
            ->setEndereco($dtoTest->testSetEndereco())
            ->setTelefones($dtoTest->testSetTelefones());

        $result = $this->assinar->Post();
        $this->assertTrue(in_array($result->status, [200, 201, 204]), $result->body);
        $responseArray = json_decode($result->body, true);
        $this->assertInternalType('array', $responseArray, $result->body);
        $this->assertArrayHasKey('Token', $responseArray, $result->body);
    }

    /**
     * @expectedException PagueVeloz\Exception\NotImplementedException
     */
    public function testPut()
    {
        $this->assinar->Put(1);
    }

    /**
     * @expectedException PagueVeloz\Exception\NotImplementedException
     */
    public function testDelete()
    {
        $this->assinar->Delete(1);
    }
}
