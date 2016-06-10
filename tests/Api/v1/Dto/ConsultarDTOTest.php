<?php

namespace PagueVeloz\Api\v1\Dto;

use TestCase;

class ConsultarDTOTest extends TestCase
{
    protected $dto;

    public function setUp()
    {
        parent::setUp();

        $this->dto = new ConsultarDTO();
    }

    public function testSetTipo()
    {
        $tipo = $this->faker->randomElement([
            'Bancos',
            'Clientes',
            'ClientesBoletoZClienteJaCadastrado',
            'SMSTelefoneDestino',
            'SMSTelefoneRemetente',
        ]);

        $this->dto->setTipo($tipo);

        $this->assertAttributeEquals($tipo, 'Tipo', $this->dto);

        return $tipo;
    }

    /**
     * @depends testSetTipo
     */
    public function testGetTipo($tipo)
    {
        $this->dto->setTipo($tipo);

        $this->assertEquals($tipo, $this->dto->getTipo());
    }
}
