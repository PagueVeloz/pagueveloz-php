<?php

namespace PagueVeloz\Api\v1\Dto;

use TestCase;

class ClienteDTOTest extends TestCase {

	public function setUp() {

		parent::setUp();

		$this->dto = new ClienteDTO;

	}

	public function testSetNomeArquivo()
	{
		$nomeArquivo = $this->faker->randomNumber;

		$this->dto->setNomeArquivo($nomeArquivo);

		$this->assertAttributeEquals($nomeArquivo, 'NomeArquivo', $this->dto);

		return $nomeArquivo;
	}

	/**
	 * @depends testSetNomeArquivo
	 */
	public function testGetNomeArquivo($nomeArquivo)
	{
		$this->dto->setNomeArquivo($nomeArquivo);

		$this->assertEquals($nomeArquivo, $this->dto->getNomeArquivo());
	}

	public function testSetConteudoArquivoBase64()
	{
		$conteudo = $this->faker->sha256;

		$this->dto->setConteudoArquivoBase64($conteudo);

		$this->assertAttributeEquals($conteudo, 'ConteudoArquivoBase64', $this->dto);

		return $conteudo;
	}

	/**
	 * @depends testSetConteudoArquivoBase64
	 */
	public function testGetConteudoArquivoBase64($conteudo)
	{
		$this->dto->setConteudoArquivoBase64($conteudo);

		$this->assertEquals($conteudo, $this->dto->getConteudoArquivoBase64());
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
