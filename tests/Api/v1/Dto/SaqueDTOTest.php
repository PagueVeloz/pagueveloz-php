<?php

namespace PagueVeloz\Api\v1\Dto;

use TestCase;

class SaqueDTOTest extends TestCase
{
    protected $dto;

    public function setUp()
    {
        parent::setUp();

        $this->dto = new SaqueDTO();
    }

    public function testSetContaBancaria()
    {
        $conta = new ContaBancariaDTO();

        $this->dto->setContaBancaria($conta);

        $this->assertAttributeEquals($conta, 'ContaBancaria', $this->dto);

        return $conta;
    }

    /**
     * @depends testSetContaBancaria
     */
    public function testGetContaBancaria($conta)
    {
        $this->dto->setContaBancaria($conta);

        $this->assertEquals($conta, $this->dto->getContaBancaria());
    }

    public function testSetStatus()
    {
        $status = $this->faker->randomElement(['A', 'I']);

        $this->dto->setStatus($status);

        $this->assertAttributeEquals($status, 'Status', $this->dto);

        return $status;
    }

    /**
     * @depends testSetStatus
     */
    public function testGetStatus($status)
    {
        $this->dto->setStatus($status);

        $this->assertEquals($status, $this->dto->getStatus());
    }

    public function testSetValor()
    {
        $valor = $this->faker->randomFloat(2);

        $this->dto->setValor($valor);

        $this->assertAttributeEquals($valor, 'Valor', $this->dto);

        return $valor;
    }

    /**
     * @depends testSetValor
     */
    public function testGetValor($valor)
    {
        $this->dto->setValor($valor);

        $this->assertEquals($valor, $this->dto->getValor());
    }

    public function testSetDataProcessamento()
    {
        $data = $this->faker->iso8601;

        $this->dto->setDataProcessamento($data);

        $this->assertAttributeEquals($data, 'DataProcessamento', $this->dto);

        return $data;
    }

    /**
     * @depends testSetDataProcessamento
     */
    public function testGetDataProcessamento($data)
    {
        $this->dto->setDataProcessamento($data);

        $this->assertEquals($data, $this->dto->getDataProcessamento());
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
