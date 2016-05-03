<?php

namespace PagueVeloz\Api\Common\Dto;

use TestCase;

class UsuarioNaGravacaoDTOTest extends TestCase
{

	protected $dto;

	public function setUp() {
		parent::setUp();

		$this->dto = new UsuarioNaGravacaoDTO;
	}

    public function testGetNotEmpty()
    {
		$this->assertNotEmpty($this->dto->getNotEmpty());
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

    public function testSetEmail()
    {
        $email = $this->faker->freeEmail;

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

    public function testSetSenha()
    {
        $senha = $this->faker->password;

        $this->dto->setSenha($senha);

        $this->assertAttributeEquals($senha, 'Senha', $this->dto);

        return $senha;
    }

    /**
     * @depends testSetSenha
     */
    public function testGetSenha($senha)
    {
        $this->dto->setSenha($senha);

        $this->assertEquals($senha, $this->dto->getSenha());
    }

    public function testSetConfirmacaoSenha()
    {
        $senha = $this->faker->password;

        $this->dto->setConfirmacaoSenha($senha);

        $this->assertAttributeEquals($senha, 'ConfirmacaoSenha', $this->dto);

        return $senha;
    }

    /**
     * @depends testSetConfirmacaoSenha
     */
    public function testGetConfirmacaoSenha($senha)
    {
        $this->dto->setConfirmacaoSenha($senha);

        $this->assertEquals($senha, $this->dto->getConfirmacaoSenha());
    }

    public function testSetAtivo()
    {
        $ativo = $this->faker->boolean;

        $this->dto->setAtivo($ativo);

        $this->assertAttributeEquals($ativo, 'Ativo', $this->dto);

        return $ativo;
    }

    /**
     * @depends testSetAtivo
     */
    public function testGetAtivo($ativo)
    {
        $this->dto->setAtivo($ativo);

        $this->assertEquals($ativo, $this->dto->getAtivo());
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
