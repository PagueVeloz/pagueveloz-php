<?php

namespace PagueVeloz\Api\v1\Dto;

use TestCase;

class ContaDTOTest extends TestCase {

    protected $dto;

    public function setUp()
    {
        parent::setUp();

        $this->dto = new ContaDTO;
    }

    public function testSetTipo()
    {
        $tipo = $this->faker->randomElement([
            'Bancos',
            'Clientes',
            'ClientesBoletoZClienteJaCadastrado',
            'SMSTelefoneDestino',
            'SMSTelefoneRemetente'
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
