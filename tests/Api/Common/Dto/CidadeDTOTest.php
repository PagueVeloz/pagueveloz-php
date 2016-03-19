<?php

namespace PagueVeloz\Api\Common\Dto;

use TestCase;

class CidadeDTOTest extends TestCase {

	protected $dto;

	public function setUp()
	{
		parent::setUp();

		$this->dto = new CidadeDTO;
	}

	public function testGetNotEmpty()
    {
		$this->assertEquals($this->dto->getNotEmpty(), []);
    }

	public function testSetNome()
    {
		$nome = $this->faker->name;

		$this->dto->setNome($nome);

		$this->assertAttributeEquals($nome, 'Nome', $this->dto);

		return $nome;
    }

	/**
	 * @depends testSetNome
	 */
	public function testGetNome($nome)
    {
		$this->dto->setNome($nome);

		$this->assertEquals($nome, $this->dto->getNome());
    }

	public function testSetEstado()
	{
		$estado = $this->faker->state;

		$this->dto->setEstado($estado);

		$this->assertAttributeEquals($estado, 'Estado', $this->dto);

		return $estado;
	}

	/**
	 * @depends testSetEstado
	 */
	public function testGetEstado($estado)
    {
		$this->dto->setEstado($estado);

		$this->assertEquals($estado, $this->dto->getEstado());
    }

}
