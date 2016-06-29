<?php

namespace PagueVeloz\Api\Common\Dto;

use TestCase;

class TelefoneDTOTest extends TestCase
{
    protected $dto;

    public function setUp()
    {
        parent::setUp();

        $this->dto = new TelefoneDTO();
    }

    public function testGetNotEmpty()
    {
        $this->assertEquals($this->dto->getNotEmpty(), ['Numero', 'Tipo']);
    }

    public function testSetNumero()
    {
        $numero = $this->faker->numerify(123);

        $this->dto->setNumero($numero);

        $this->assertAttributeEquals($numero, 'Numero', $this->dto);

        return $numero;
    }

    /**
     * @depends testSetNumero
     */
    public function testGetNumero($numero)
    {
        $this->dto->setNumero($numero);

        $this->assertEquals($numero, $this->dto->getNumero());
    }

    public function testSetTipo()
    {
        $tipo = $this->faker->randomElement([1,2,4]);

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

    public function testSetObservacao()
    {
        $observacao = $this->faker->text(255);

        $this->dto->setObservacao($observacao);

        $this->assertAttributeEquals($observacao, 'Observacao', $this->dto);

        return $observacao;
    }

    /**
     * @depends testSetObservacao
     */
    public function testGetObservacao($observacao)
    {
        $this->dto->setObservacao($observacao);

        $this->assertEquals($observacao, $this->dto->getObservacao());
    }
}
