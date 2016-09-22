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
        $cpf = $this->faker->cpf;

        $this->dto->setDocumento($cpf);

        $this->assertAttributeEquals($cpf, 'Documento', $this->dto);

        return $cpf;
    }

    /**
     * @depends testSetDocumento
     */
    public function testGetDocumento($cpf)
    {
        $this->dto->setDocumento($cpf);

        $this->assertEquals($cpf, $this->dto->getDocumento());
    }

    public function testSetTipoPessoa()
    {
        $tipo = $this->faker->randomElement([0, 1, 2]);

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
