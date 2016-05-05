<?php

namespace PagueVeloz\Api\v1\Dto;

use TestCase;

class UsuarioClienteDTOTest extends TestCase {

	protected $dto;

	public function setUp() {
		parent::setUp();

		$this->dto = new UsuarioClienteDTO;
	}

	public function testSetEmail()
	{
		$email = $this->faker->bothify("#?#?#?#?#?#?#?#?#@gmail.com");;

		$this->dto->setEmail($email);

		$this->assertAttributeEquals($email, 'Email', $this->dto);

		return $email;
	}

	/**
	 * @depends testSetEmail
	 */
	public function testGetEmail($email)
	{
		$this->dto->setEmail($email);

		$this->assertEquals($email, $this->dto->getEmail());
	}

	public function testSetAtivo()
	{
		$boolean = $this->faker->boolean(50);

		$this->dto->setAtivo($boolean);

		$this->assertAttributeEquals($boolean, 'Ativo', $this->dto);

		return $boolean;
	}

	/**
	 * @depends testSetAtivo
	 */
	public function testGetAtivo($boolean)
	{
		$this->dto->setAtivo($boolean);

		$this->assertEquals($boolean, $this->dto->getAtivo());
	}
}
