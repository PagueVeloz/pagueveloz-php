<?php

namespace PagueVeloz\Api\v1\Dto;

use TestCase;

class TarifarBoletoDTOTest extends TestCase {

    protected $dto;

    public function setUp()
    {
        parent::setUp();

        $this->dto = new TarifarBoletoDTO;
    }

    public function testSetBoleto()
    {
        $boleto = $this->faker->creditCardNumber;

        $this->dto->setBoleto($boleto);

        $this->assertAttributeEquals($boleto, 'Boleto', $this->dto);

        return $boleto;
    }

    /**
     * @depends testSetBoleto
     */
    public function testGetBoleto($boleto)
    {
        $this->dto->setBoleto($boleto);

        $this->assertEquals($boleto, $this->dto->getBoleto());
    }
}
