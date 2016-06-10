<?php

namespace PagueVeloz\Api\Common\Dto;

use TestCase;

class TitularContaBancariaDTOTest extends TestCase
{
    protected $dto;

    public function setUp()
    {
        parent::setUp();

        $this->dto = new TitularContaBancariaDTO();
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

    public function testSetDocumento()
    {
        $cpfCnpj = $this->faker->randomElement([$this->faker->cpf, $this->faker->cnpj]);

        $this->dto->setDocumento($cpfCnpj);

        $this->assertAttributeEquals($cpfCnpj, 'Documento', $this->dto);

        return $cpfCnpj;
    }

    /**
     * @depends testSetDocumento
     */
    public function testGetDocumento($cpfCnpj)
    {
        $this->dto->setDocumento($cpfCnpj);

        $this->assertEquals($cpfCnpj, $this->dto->getDocumento());
    }

    public function testSetTipoPessoa()
    {
        $tipo = $this->faker->randomElement(['F','J']);

        $this->dto->setTipoPessoa($tipo);

        $this->assertAttributeEquals($tipo, 'TipoPessoa', $this->dto);

        return $tipo;
    }

    /**
     * @depends testSetTipoPessoa
     */
    public function testGetTipoPessoa($tipo)
    {
        $this->dto->setTipoPessoa($tipo);

        $this->assertEquals($tipo, $this->dto->getTipoPessoa());
    }
}
