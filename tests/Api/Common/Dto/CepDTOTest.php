<?php

namespace PagueVeloz\Api\Common\Dto;

use TestCase;

class CepDTOTest extends TestCase
{

	protected $dto;

	public function setUp() {
		parent::setUp();

		$this->dto = new CepDTO;
	}

    public function testGetNotEmpty()
    {
		$this->assertEquals($this->dto->getNotEmpty(), []);
    }

    public function testGetCidade()
    {
		$this->assertInstanceOf(CidadeDTO::class, $this->dto->getCidade());
    }

    public function testSetCidade()
    {
		$cidade = new CidadeDTO;

		$this->dto->setCidade($cidade);

		$this->assertAttributeEquals($cidade, 'Cidade', $this->dto);
    }

	public function testSetLogradouro()
	{
		$logradouro = $this->faker->streetAddress;

		$this->dto->setLogradouro($logradouro);

		$this->assertAttributeEquals($logradouro, 'Logradouro', $this->dto);

		return $logradouro;
	}

	/**
	 * @depends testSetLogradouro
	 */
    public function testGetLogradouro($logradouro)
    {
		$this->dto->setLogradouro($logradouro);

		$this->assertEquals($logradouro, $this->dto->getLogradouro());
    }

	public function testSetNumero()
	{
		$numero = $this->faker->buildingNumber;

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

	public function testSetCEP()
	{
		$cep = $this->faker->postcode;

		$this->dto->setCEP($cep);

		$this->assertAttributeEquals($cep, 'CEP', $this->dto);

		return $cep;
	}

	/**
	 * @depends testSetCEP
	 */
    public function testGetCEP($cep)
    {
		$this->dto->setCEP($cep);

		$this->assertEquals($cep, $this->dto->getCEP());
    }

}
