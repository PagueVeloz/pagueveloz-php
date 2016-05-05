<?php

namespace PagueVeloz\Api\v4\Dto;

use TestCase;
use PagueVeloz\Api\Common\Dto\TitularContaBancariaDTO;

class ContaBancariaDTOTest extends TestCase {

	protected $dto;

	public function setUp() {
		parent::setUp();

		$this->dto = new ContaBancariaDTO;
	}

	public function testGetNotEmpty()
	{
		$this->assertTrue(is_array($this->dto->getNotEmpty()));
	}

	public function testSetCodigoBanco()
	{
		$numero = $this->faker->randomNumber;

		$this->dto->setCodigoBanco($numero);

		$this->assertAttributeEquals($numero, 'CodigoBanco', $this->dto);

		return $numero;
	}

	/**
	 * @depends testSetCodigoBanco
	 */
	public function testGetCodigoBanco($numero)
	{
		$this->dto->setCodigoBanco($numero);

		$this->assertEquals($numero, $this->dto->getCodigoBanco());
	}

	public function testSetCodigoAgencia()
	{
		$numero = $this->faker->randomNumber;

		$this->dto->setCodigoAgencia($numero);

		$this->assertAttributeEquals($numero, 'CodigoAgencia', $this->dto);

		return $numero;
	}

	/**
	 * @depends testSetCodigoAgencia
	 */
	public function testGetCodigoAgencia($numero)
	{
		$this->dto->setCodigoAgencia($numero);

		$this->assertEquals($numero, $this->dto->getCodigoAgencia());
	}

	public function testSetDigitoAgencia()
	{
		$numero = $this->faker->randomNumber;

		$this->dto->setDigitoAgencia($numero);

		$this->assertAttributeEquals($numero, 'DigitoAgencia', $this->dto);

		return $numero;
	}

	/**
	 * @depends testSetDigitoAgencia
	 */
	public function testGetDigitoAgencia($numero)
	{
		$this->dto->setDigitoAgencia($numero);

		$this->assertEquals($numero, $this->dto->getDigitoAgencia());
	}

	public function testSetNumeroConta()
	{
		$numero = $this->faker->numerify('########');

		$this->dto->setNumeroConta($numero);

		$this->assertAttributeEquals($numero, 'NumeroConta', $this->dto);

		return $numero;
	}

	/**
	 * @depends testSetNumeroConta
	 */
	public function testGetNumeroConta($numero)
	{
		$this->dto->setNumeroConta($numero);

		$this->assertEquals($numero, $this->dto->getNumeroConta());
	}

	public function testSetDigitoConta()
	{
		$numero = $this->faker->randomNumber;

		$this->dto->setDigitoConta($numero);

		$this->assertAttributeEquals($numero, 'DigitoConta', $this->dto);

		return $numero;
	}

	/**
	 * @depends testSetDigitoConta
	 */
	public function testGetDigitoConta($numero)
	{
		$this->dto->setDigitoConta($numero);

		$this->assertEquals($numero, $this->dto->getDigitoConta());
	}

	public function testSetDescricao()
	{
		$text = $this->faker->text(255);

		$this->dto->setDescricao($text);

		$this->assertAttributeEquals($text, 'Descricao', $this->dto);

		return $text;
	}

	/**
	 * @depends testSetDescricao
	 */
	public function testGetDescricao($text)
	{
		$this->dto->setDescricao($text);

		$this->assertEquals($text, $this->dto->getDescricao());
	}

	public function testSetExcluida()
	{
		$boolean = $this->faker->boolean;

		$this->dto->setExcluida($boolean);

		$this->assertAttributeEquals($boolean, 'Excluida', $this->dto);

		return $boolean;
	}

	/**
	 * @depends testSetExcluida
	 */
	public function testGetExcluida($boolean)
	{
		$this->dto->setExcluida($boolean);

		$this->assertEquals($boolean, $this->dto->getExcluida());
	}

	public function testSetOperacao()
	{
		$word = $this->faker->word;

		$this->dto->setOperacao($word);

		$this->assertAttributeEquals($word, 'Operacao', $this->dto);

		return $word;
	}

	/**
	 * @depends testSetOperacao
	 */
	public function testGetOperacao($word)
	{
		$this->dto->setOperacao($word);

		$this->assertEquals($word, $this->dto->getOperacao());
	}

	public function testSetDataValidadeAprovada()
	{
		$date = $this->faker->date('Y-m-d H:i:s');

		$this->dto->setDataValidadeAprovada($date);

		$this->assertAttributeEquals($date, 'DataValidadeAprovada', $this->dto);

		return $date;
	}

	/**
	 * @depends testSetDataValidadeAprovada
	 */
	public function testGetDataValidadeAprovada($date)
	{
		$this->dto->setDataValidadeAprovada($date);

		$this->assertEquals($date, $this->dto->getDataValidadeAprovada());
	}

	public function testSetDataValidadeSolicitada()
	{
		$date = $this->faker->date('Y-m-d H:i:s');

		$this->dto->setDataValidadeSolicitada($date);

		$this->assertAttributeEquals($date, 'DataValidadeSolicitada', $this->dto);

		return $date;
	}

	/**
	 * @depends testSetDataValidadeSolicitada
	 */
	public function testGetDataValidadeSolicitada($date)
	{
		$this->dto->setDataValidadeSolicitada($date);

		$this->assertEquals($date, $this->dto->getDataValidadeSolicitada());
	}

	public function testSetStatus()
	{
		$all = [ContaBancariaDTO::STATUS_CONTA_BANCARIA_VERIFICADA,
			ContaBancariaDTO::STATUS_CONTA_BANCARIA_NAOVERIFICADA,
			ContaBancariaDTO::STATUS_CONTA_BANCARIA_REJEITADA,
			ContaBancariaDTO::STATUS_CONTA_BANCARIA_VENCIDA,
			ContaBancariaDTO::STATUS_CONTA_BANCARIA_INATIVA];

		$status = $this->faker->randomElement([$all]);

		$this->dto->setStatus($status);

		$this->assertAttributeEquals($status, 'Status', $this->dto);

		return $status;
	}

	/**
	 * @depends testSetStatus
	 */
	public function testGetStatus($status)
	{
		$this->dto->setStatus($status);

		$this->assertEquals($status, $this->dto->getStatus());
	}

	public function testSetTipoConta()
	{
		$all = [ContaBancariaDTO::TIPO_CONTABANCARIA_NAODEFINIDO,
			ContaBancariaDTO::TIPO_CONTABANCARIA_CONTACORRENTE,
			ContaBancariaDTO::TIPO_CONTABANCARIA_CONTAPOUPANCA];

		$tipo = $this->faker->randomElement($all);

		$this->dto->setTipoConta($tipo);

		$this->assertAttributeEquals($tipo, 'TipoConta', $this->dto);

		return $tipo;
	}

	/**
	 * @depends testSetTipoConta
	 */
	public function testGetTipoConta($tipo)
	{
		$this->dto->setTipoConta($tipo);

		$this->assertEquals($tipo, $this->dto->getTipoConta());
	}

	public function testSetTipoTitular()
	{
		$all = [ContaBancariaDTO::TIPO_TITULARCONTABANCARIA_PROPRIA,
			ContaBancariaDTO::TIPO_TITULARCONTABANCARIA_SOCIO,
			ContaBancariaDTO::TIPO_TITULARCONTABANCARIA_TERCEIRO];

		$tipo = $this->faker->randomElement($all);

		$this->dto->setTipoTitular($tipo);

		$this->assertAttributeEquals($tipo, 'TipoTitular', $this->dto);

		return $tipo;
	}

	/**
	 * @depends testSetTipoTitular
	 */
	public function testGetTipoTitular($tipo)
	{
		$this->dto->setTipoTitular($tipo);

		$this->assertEquals($tipo, $this->dto->getTipoTitular());
	}

	public function testSetTitular()
	{
		$titular = new TitularContaBancariaDTO;
		$titular->setNome($this->faker->name);
		$titular->setDocumento($this->faker->cpf);
		$titular->setTipoPessoa(TitularContaBancariaDTO::TIPO_PESSOA_FISICA);
		$this->dto->setTitular($titular);

		$this->assertAttributeEquals($titular, 'Titular', $this->dto);

		return $titular;
	}

	/**
	 * @depends testSetTitular
	 */
	public function testGetTitular($titular)
	{
		$this->dto->setTitular($titular);

		$this->assertEquals($titular, $this->dto->getTitular());
	}

	public function testSetId()
	{
		$number = $this->faker->randomNumber;

		$this->dto->setId($number);

		$this->assertAttributeEquals($number, 'Id', $this->dto);

		return $number;
	}

	/**
	 * @depends testSetId
	 */
	public function testGetId($number)
	{
		$this->dto->setId($number);

		$this->assertEquals($number, $this->dto->getId());
	}

}
