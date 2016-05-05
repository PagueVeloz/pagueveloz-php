<?php

namespace PagueVeloz\Api\v4;

use TestCase;
use PagueVeloz\PagueVeloz;
use PagueVeloz\Api\v4\Dto\ContaBancariaDTOTest;
use PagueVeloz\Api\v4\Dto\ContaBancariaDTO;

class ContaBancariaTest extends TestCase {

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
        $class = 'PagueVeloz\Api\\' . $version . '\ContaBancaria';
        $this->assertInstanceOf($class, $object);
    }

    public function testPostContaPropria()
    {
        $dtoTest = new ContaBancariaDTOTest;
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
        $this->assertEquals('stdClass', get_class($responseObject), "Deve ser possível converter em objeto\n" . dr($responseObject));
        $this->assertObjectHasAttribute('Id', $responseObject, "Deve retornar um Id\n" . dr($result->body));
        $this->assertEquals(201, $result->status, "Deve retornar status 201\n" . dr($result->body));
    }

    public function testPostContaSocio()
    {
        $dtoTest = new ContaBancariaDTOTest;
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
        $this->assertEquals('stdClass', get_class($responseObject), "Deve ser possível converter em objeto\n" . dr($responseObject));
        $this->assertObjectHasAttribute('Id', $responseObject, "Deve retornar um Id\n" . dr($result->body));
        $this->assertEquals(201, $result->status, "Deve retornar status 201\n" . dr($result->body));
    }
}