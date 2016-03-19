<?php

namespace PagueVeloz\Api\v1\Dto;

use TestCase;

class MensagemSMSDTOTest extends TestCase {

    protected $dto;

    public function setUp()
    {
        parent::setUp();

        $this->dto = new MensagemSMSDTO;
    }

    public function testSetSeuId()
    {
        $seuId = $this->faker->randomNumber;

        $this->dto->setSeuId($seuId);

        $this->assertAttributeEquals($seuId, 'SeuId', $this->dto);

        return $seuId;
    }

    /**
     * @depends testSetSeuId
     */
    public function testGetSeuId($seuId)
    {
        $this->dto->setSeuId($seuId);

        $this->assertEquals($seuId, $this->dto->getSeuId());
    }

    public function testSetTelefoneRemetente()
    {
        $number = $this->faker->cellphoneNumber;

        $this->dto->setTelefoneRemetente($number);

        $this->assertAttributeEquals($number, 'TelefoneRemetente', $this->dto);

        return $number;
    }

    /**
     * @depends testSetTelefoneRemetente
     */
    public function testGetTelefoneRemetente($number)
    {
        $this->dto->setTelefoneRemetente($number);

        $this->assertEquals($number, $this->dto->getTelefoneRemetente());
    }

    public function testSetTelefoneDestino()
    {
        $number = $this->faker->cellphoneNumber;

        $this->dto->setTelefoneDestino($number);

        $this->assertAttributeEquals($number, 'TelefoneDestino', $this->dto);

        return $number;
    }

    /**
     * @depends testSetTelefoneDestino
     */
    public function testGetTelefoneDestino($number)
    {
        $this->dto->setTelefoneDestino($number);

        $this->assertEquals($number, $this->dto->getTelefoneDestino());
    }

    public function testSetConteudo()
    {
        $conteudo = $this->faker->sentence;

        $this->dto->setConteudo($conteudo);

        $this->assertAttributeEquals($conteudo, 'Conteudo', $this->dto);

        return $conteudo;
    }

    /**
     * @depends testSetConteudo
     */
    public function testGetConteudo($conteudo)
    {
        $this->dto->setConteudo($conteudo);

        $this->assertEquals($conteudo, $this->dto->getConteudo());
    }

    public function testSetAgendarPara()
    {
        $data = $this->faker->iso8601;

        $this->dto->setAgendarPara($data);

        $this->assertAttributeEquals($data, 'AgendarPara', $this->dto);

        return $data;
    }

    /**
     * @depends testSetAgendarPara
     */
    public function testGetAgendarPara($data)
    {
        $this->dto->setAgendarPara($data);

        $this->assertEquals($data, $this->dto->getAgendarPara());
    }

    public function testSetStatus()
    {
        $status = $this->faker->randomElement(['A','I']);

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

    public function testSetDataInicial()
    {
        $data = $this->faker->iso8601;

        $this->dto->setDataInicial($data);

        $this->assertAttributeEquals($data, 'DataInicial', $this->dto);

        return $data;
    }

    /**
     * @depends testSetDataInicial
     */
    public function testGetDataInicial($data)
    {
        $this->dto->setDataInicial($data);

        $this->assertEquals($data, $this->dto->getDataInicial());
    }

    public function testSetDataFinal()
    {
        $data = $this->faker->iso8601;

        $this->dto->setDataFinal($data);

        $this->assertAttributeEquals($data, 'DataFinal', $this->dto);

        return $data;
    }

    /**
     * @depends testSetDataFinal
     */
    public function testGetDataFinal($data)
    {
        $this->dto->setDataFinal($data);

        $this->assertEquals($data, $this->dto->getDataFinal());
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
