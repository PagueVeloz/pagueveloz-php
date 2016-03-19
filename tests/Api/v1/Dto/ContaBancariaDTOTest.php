<?php

namespace PagueVeloz\Api\v1\Dto;

use TestCase;

class ContaBancariaDTOTest extends TestCase {

    protected $dto;

    public function setUp()
    {
        parent::setUp();

        $this->dto = new ContaBancariaDTO;
    }

    public function testSetCodigoBanco()
	{
		$codigo = $this->faker->randomNumber;

		$this->dto->setCodigoBanco($codigo);

		$this->assertAttributeEquals($codigo, 'CodigoBanco', $this->dto);

		return $codigo;
	}

	/**
	 * @depends testSetCodigoBanco
	 */
    public function testGetCodigoBanco($codigo)
    {
		$this->dto->setCodigoBanco($codigo);

		$this->assertEquals($codigo, $this->dto->getCodigoBanco());
    }

    public function testSetCodigoAgencia()
	{
		$codigo = $this->faker->randomNumber;

		$this->dto->setCodigoAgencia($codigo);

		$this->assertAttributeEquals($codigo, 'CodigoAgencia', $this->dto);

		return $codigo;
	}

	/**
	 * @depends testSetCodigoAgencia
	 */
    public function testGetCodigoAgencia($codigo)
    {
		$this->dto->setCodigoAgencia($codigo);

		$this->assertEquals($codigo, $this->dto->getCodigoAgencia());
    }

    public function testSetNumeroConta()
	{
		$codigo = $this->faker->bankAccountNumber;

		$this->dto->setNumeroConta($codigo);

		$this->assertAttributeEquals($codigo, 'NumeroConta', $this->dto);

		return $codigo;
	}

	/**
	 * @depends testSetNumeroConta
	 */
    public function testGetNumeroConta($codigo)
    {
		$this->dto->setNumeroConta($codigo);

		$this->assertEquals($codigo, $this->dto->getNumeroConta());
    }

    public function testSetDescricao()
	{
		$descricao = $this->faker->text;

		$this->dto->setDescricao($descricao);

		$this->assertAttributeEquals($descricao, 'Descricao', $this->dto);

		return $descricao;
	}

	/**
	 * @depends testSetDescricao
	 */
    public function testGetDescricao($descricao)
    {
		$this->dto->setDescricao($descricao);

		$this->assertEquals($descricao, $this->dto->getDescricao());
    }

    public function testSetExcluida()
	{
		$excluida = $this->faker->boolean;

		$this->dto->setExcluida($excluida);

		$this->assertAttributeEquals($excluida, 'Excluida', $this->dto);

		return $excluida;
	}

	/**
	 * @depends testSetExcluida
	 */
    public function testGetExcluida($excluida)
    {
		$this->dto->setExcluida($excluida);

		$this->assertEquals($excluida, $this->dto->getExcluida());
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
