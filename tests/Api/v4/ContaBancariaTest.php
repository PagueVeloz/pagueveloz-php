<?php

namespace PagueVeloz\Api\v4;

use TestCase;
use PagueVeloz\PagueVeloz;
use PagueVeloz\Api\v4\Dto\ContaBancariaDTOTest;
use PagueVeloz\Api\v4\Dto\ContaBancariaDTO;

class ContaBancariaTest extends TestCase
{
    protected $contaBancaria;

    public function setUp()
    {
        parent::setUp();
        $version = 'v4';
        $this->contaBancaria = PagueVeloz::ContaBancaria($version);
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
        $object = PagueVeloz::ContaBancaria($version);
        $class = 'PagueVeloz\Api\\'.$version.'\ContaBancaria';
        $this->assertInstanceOf($class, $object);
    }

    /**
     * @expectedException Exception
     */
    public function testPostThrowExceptionIfNoParams()
    {
        $this->contaBancaria->Post();
    }

    public function testPostContaPropria()
    {
        $dtoTest = new ContaBancariaDTOTest();
        $dtoTest->setUp();

        $this->contaBancaria->auth = $this->auth();

        $this->contaBancaria->dto
            ->setCodigoBanco(1)
            ->setCodigoAgencia('0405')
            ->setDigitoAgencia('5')
            ->setNumeroConta($this->faker->numerify('########'))
            ->setDigitoConta('X')
            ->setDescricao('Conta no Banco do Brasil')
            ->setTipoConta(ContaBancariaDTO::TIPO_CONTABANCARIA_CONTACORRENTE)
            ->setTipoTitular(ContaBancariaDTO::TIPO_TITULARCONTABANCARIA_PROPRIA);

        $result = $this->contaBancaria->Post();

        $responseObject = json_decode($result->body);
        $this->assertEquals('stdClass', get_class($responseObject), "Deve ser possível converter em objeto\n".dr($responseObject));
        $this->assertEquals(201, $result->status, "Deve retornar status 201\n".dr($result->body));
        $this->assertObjectHasAttribute('Id', $responseObject, "Deve retornar um Id\n".dr($result->body));

        return $responseObject->Id;
    }

    public function testPostContaSocio()
    {
        $dtoTest = new ContaBancariaDTOTest();
        $dtoTest->setUp();

        $this->contaBancaria->auth = $this->auth();

        $this->contaBancaria->dto
            ->setCodigoBanco(1)
            ->setCodigoAgencia('0405')
            ->setDigitoAgencia('5')
            ->setNumeroConta($dtoTest->testSetNumeroConta())
            ->setDigitoConta('X')
            ->setDescricao('Conta no Banco do Brasil')
            ->setTitular($dtoTest->testSetTitular())
            ->setTipoConta(ContaBancariaDTO::TIPO_CONTABANCARIA_CONTACORRENTE)
            ->setTipoTitular(ContaBancariaDTO::TIPO_TITULARCONTABANCARIA_SOCIO);

        $result = $this->contaBancaria->Post();

        $responseObject = json_decode($result->body);
        $this->assertEquals('stdClass', get_class($responseObject), "Deve ser possível converter em objeto\n".dr($responseObject));
        $this->assertEquals(201, $result->status, "Deve retornar status 201\n".dr($result->body));
        $this->assertObjectHasAttribute('Id', $responseObject, "Deve retornar um Id\n".dr($result->body));

        return $responseObject->Id;
    }

    public function testPostContaTerceiroSemDataValidadeSolicitada()
    {
        $dtoTest = new ContaBancariaDTOTest();
        $dtoTest->setUp();

        $this->contaBancaria->auth = $this->auth();

        $this->contaBancaria->dto
            ->setCodigoBanco(1)
            ->setCodigoAgencia('0405')
            ->setDigitoAgencia('5')
            ->setNumeroConta($dtoTest->testSetNumeroConta())
            ->setDigitoConta('X')
            ->setDescricao('Conta no Banco do Brasil')
            ->setTitular($dtoTest->testSetTitular())
            ->setTipoConta(ContaBancariaDTO::TIPO_CONTABANCARIA_CONTACORRENTE)
            ->setTipoTitular(ContaBancariaDTO::TIPO_TITULARCONTABANCARIA_TERCEIRO);

        $result = $this->contaBancaria->Post();

        $responseObject = json_decode($result->body);
        $this->assertEquals('stdClass', get_class($responseObject), "Deve ser possível converter em objeto\n".dr($responseObject));
        $this->assertEquals(201, $result->status, "Deve retornar status 201\n".dr($result->body));
        $this->assertObjectHasAttribute('Id', $responseObject, "Deve retornar um Id\n".dr($result->body));

        return $responseObject->Id;
    }

    public function testPostContaTerceiroComDataValidadeSolicitada()
    {
        $dtoTest = new ContaBancariaDTOTest();
        $dtoTest->setUp();

        $this->contaBancaria->auth = $this->auth();

        $this->contaBancaria->dto
            ->setCodigoBanco(1)
            ->setCodigoAgencia('0405')
            ->setDigitoAgencia('5')
            ->setNumeroConta($dtoTest->testSetNumeroConta())
            ->setDigitoConta('X')
            ->setDescricao('Conta no Banco do Brasil')
            ->setTitular($dtoTest->testSetTitular())
            ->setDataValidadeSolicitada($dtoTest->testSetDataValidadeSolicitada())
            ->setTipoConta(ContaBancariaDTO::TIPO_CONTABANCARIA_CONTACORRENTE)
            ->setTipoTitular(ContaBancariaDTO::TIPO_TITULARCONTABANCARIA_TERCEIRO);

        $result = $this->contaBancaria->Post();

        $responseObject = json_decode($result->body);
        $this->assertEquals('stdClass', get_class($responseObject), "Deve ser possível converter em objeto\n".dr($responseObject));
        $this->assertEquals(201, $result->status, "Deve retornar status 201\n".dr($result->body));
        $this->assertObjectHasAttribute('Id', $responseObject, "Deve retornar um Id\n".dr($result->body));

        return $responseObject->Id;
    }

    /**
     * @depends testPostContaPropria
     */
    public function testGet($contaBancariaId)
    {
        $this->contaBancaria->auth = $this->auth();

        $result = $this->contaBancaria->Get();
        $result = json_decode($result->body, true);

        $this->assertEquals('array', gettype($result));

        $contas = [];
        foreach ($result as $conta) {
            $contas[] = $conta['Id'];
        }

        $this->assertContains($contaBancariaId, $contas, 'Deve retornar na lista uma conta já cadastrada');

        return $contas;
    }

    /**
     * @depends testPostContaPropria
     */
    public function testGetById($contaBancariaId)
    {
        $this->contaBancaria->auth = $this->auth();
        $result = $this->contaBancaria->GetById($contaBancariaId);

        $conta = json_decode($result->body, true);
        $this->assertArrayHasKey('Id', $conta, "Deve retornar um campo 'Id");
        $this->assertEquals($contaBancariaId, $conta['Id'], 'Deve ser igual a da conta cadastrada');

        return $conta['Id'];
    }

    /**
     * @depends testPostContaPropria
     */
    public function testTermoContaPropria($contaBancariaId)
    {
        $this->contaBancaria->auth = $this->auth();
        $result = $this->contaBancaria->Termo($contaBancariaId);
        $this->assertEquals(404, $result->status, 'Deve retornar status 404');
    }

    /**
     * @depends testPostContaSocio
     */
    public function testTermoContaSocio($contaBancariaId)
    {
        $this->contaBancaria->auth = $this->auth();
        $result = $this->contaBancaria->Termo($contaBancariaId);
        $this->assertEquals(404, $result->status, 'Deve retornar status 404');
    }

    /**
     * @depends testPostContaTerceiroSemDataValidadeSolicitada
     */
    public function testTermoContaTerceiro($contaBancariaId)
    {
        $this->contaBancaria->auth = $this->auth();

        $result = $this->contaBancaria->Termo($contaBancariaId);

        $this->assertEquals(200, $result->status, 'Deve retornar status 200');
        $this->assertEquals('application/pdf', $result->contentType, 'Deve retornar um arquivo PDF');
    }

    /**
     * @depends testPostContaPropria
     */
    public function testPut($contaBancariaId)
    {
        $dtoTest = new ContaBancariaDTOTest();
        $dtoTest->setUp();

        $this->contaBancaria->auth = $this->auth();

        $this->contaBancaria->dto
            ->setCodigoBanco(1)
            ->setCodigoAgencia('0504')
            ->setDigitoAgencia('5')
            ->setNumeroConta($this->faker->numerify('########'))
            ->setDigitoConta('X')
            ->setDescricao('Conta no Banco do Brasil')
            ->setTipoConta(ContaBancariaDTO::TIPO_CONTABANCARIA_CONTACORRENTE)
            ->setTipoTitular(ContaBancariaDTO::TIPO_TITULARCONTABANCARIA_PROPRIA)
            ->setId($contaBancariaId);

        $result = $this->contaBancaria->Put($contaBancariaId);
        $this->assertEquals(200, $result->status, "Deve retornar status 200\n".dr($result->body));
    }

    /**
     * @expectedException Exception
     */
    public function testPutThrowException()
    {
        $this->contaBancaria->Put(1);
    }

    /**
     * @depends testPostContaPropria
     */
    public function testDelete($contaBancariaId)
    {
        $this->contaBancaria->auth = $this->auth();
        $result = $this->contaBancaria->Delete($contaBancariaId);
        $this->assertEquals(200, $result->status, "Deve retornar status 200\n".dr($result->body));
    }

    /**
     * @depends testPostContaPropria
     */
    public function testAtivar($contaBancariaId)
    {
        $this->contaBancaria->auth = $this->auth();
        $result = $this->contaBancaria->Ativar($contaBancariaId);
        $this->assertEquals(200, $result->status, "Deve retornar status 200\n".dr($result->body));
    }

    /**
     * @depends testPostContaPropria
     */
    public function testPossuiSaques($contaBancariaId)
    {
        $this->contaBancaria->auth = $this->auth();
        $result = $this->contaBancaria->PossuiSaques($contaBancariaId);
        $this->assertEquals(200, $result->status, "Deve retornar status 200\n".dr($result->body));
    }
}
