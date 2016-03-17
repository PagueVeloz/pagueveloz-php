<?php

namespace PagueVeloz\Api\v1\Dto;

use TestCase;

class DefaultBoletoDTOTest extends TestCase {

    protected $dto;

    public function setUp()
    {
        parent::setUp();

        $this->dto = new DefaultBoletoDTO;
    }

    public function testSetLinha1()
    {
        $linha = $this->faker->sentence;

        $this->dto->setLinha1($linha);

        $this->assertAttributeEquals($linha, 'Linha1', $this->dto);

        return $linha;
    }

    /**
     * @depends testSetLinha1
     */
    public function testGetLinha1($linha)
    {
        $this->dto->setLinha1($linha);

        $this->assertEquals($linha, $this->dto->getLinha1());
    }

    public function testSetLinha2()
    {
        $linha = $this->faker->sentence;

        $this->dto->setLinha2($linha);

        $this->assertAttributeEquals($linha, 'Linha2', $this->dto);

        return $linha;
    }

    /**
     * @depends testSetLinha2
     */
    public function testGetLinha2($linha)
    {
        $this->dto->setLinha2($linha);

        $this->assertEquals($linha, $this->dto->getLinha2());
    }

    public function testSetVencimento()
    {
        $linha = $this->faker->iso8601;

        $this->dto->setVencimento($linha);

        $this->assertAttributeEquals($linha, 'Vencimento', $this->dto);

        return $linha;
    }

    /**
     * @depends testSetVencimento
     */
    public function testGetVencimento($linha)
    {
        $this->dto->setVencimento($linha);

        $this->assertEquals($linha, $this->dto->getVencimento());
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
