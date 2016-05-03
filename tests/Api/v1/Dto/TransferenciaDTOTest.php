<?php

namespace PagueVeloz\Api\v1\Dto;

use TestCase;

class TransferenciaDTOTest extends TestCase {

	protected $dto;

	public function setUp() {
		parent::setUp();

		$this->dto = new TransferenciaDTO;
	}

	public function testSetClienteDestino()
	{
		$clienteDestino = $this->faker->name;

		$this->dto->setClienteDestino($clienteDestino);

		$this->assertAttributeEquals($clienteDestino, 'ClienteDestino', $this->dto);

		return $clienteDestino;
	}

	/**
	 * @depends testSetClienteDestino
	 */
	public function testGetClienteDestino($clienteDestino)
	{
		$this->dto->setClienteDestino($clienteDestino);

		$this->assertEquals($clienteDestino, $this->dto->getClienteDestino());
	}

	public function testSetValor()
	{
		$valor = $this->faker->randomFloat;

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

	public function testSetDescricao()
	{
		$descricao = $this->faker->text(255);

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

	public function testSetDataInicial()
	{
		$date = $this->faker->dateTime;

		$this->dto->setDataInicial($date);

		$this->assertAttributeEquals($date, 'DataInicial', $this->dto);

		return $date;
	}

	/**
	 * @depends testSetDataInicial
	 */
	public function testGetDataInicial($date)
	{
		$this->dto->setDataInicial($date);

		$this->assertEquals($date, $this->dto->getDataInicial());
	}

	public function testSetDataFinal()
	{
		$date = $this->faker->dateTime;

		$this->dto->setDataFinal($date);

		$this->assertAttributeEquals($date, 'DataFinal', $this->dto);

		return $date;
	}

	/**
	 * @depends testSetDataFinal
	 */
	public function testGetDataFinal($date)
	{
		$this->dto->setDataFinal($date);

		$this->assertEquals($date, $this->dto->getDataFinal());
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
