<?php

namespace PagueVeloz\Api\v1\Dto;

use TestCase;

class ContaPagDTOTest extends TestCase
{
    protected $dto;

    public function setUp()
    {
        parent::setUp();

        $this->dto = new ContaPagDTO();
    }

    public function testSetValor()
    {
        $valor = $this->faker->randomFloat(2);

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

    public function testSetTitulo()
    {
        $titulo = $this->faker->word;

        $this->dto->setTitulo($titulo);

        $this->assertAttributeEquals($titulo, 'Titulo', $this->dto);

        return $titulo;
    }

    /**
     * @depends testSetTitulo
     */
    public function testGetTitulo($titulo)
    {
        $this->dto->setTitulo($titulo);

        $this->assertEquals($titulo, $this->dto->getTitulo());
    }

    public function testSetNomeTitulo()
    {
        $nome = $this->faker->word;

        $this->dto->setNomeTitulo($nome);

        $this->assertAttributeEquals($nome, 'NomeTitulo', $this->dto);

        return $nome;
    }

    /**
     * @depends testSetNomeTitulo
     */
    public function testGetNomeTitulo($nome)
    {
        $this->dto->setNomeTitulo($nome);

        $this->assertEquals($nome, $this->dto->getNomeTitulo());
    }

    public function testSetVencimento()
    {
        $vencimento = $this->faker->iso8601;

        $this->dto->setVencimento($vencimento);

        $this->assertAttributeEquals($vencimento, 'Vencimento', $this->dto);

        return $vencimento;
    }

    /**
     * @depends testSetVencimento
     */
    public function testGetVencimento($vencimento)
    {
        $this->dto->setVencimento($vencimento);

        $this->assertEquals($vencimento, $this->dto->getVencimento());
    }

    public function testSetCodigoDeBarras()
    {
        $codigo = $this->faker->ean13;

        $this->dto->setCodigoDeBarras($codigo);

        $this->assertAttributeEquals($codigo, 'CodigoDeBarras', $this->dto);

        return $codigo;
    }

    /**
     * @depends testSetCodigoDeBarras
     */
    public function testGetCodigoDeBarras($codigo)
    {
        $this->dto->setCodigoDeBarras($codigo);

        $this->assertEquals($codigo, $this->dto->getCodigoDeBarras());
    }

    public function testSetTituloBase64()
    {
        $titulo = base64_encode($this->faker->word);

        $this->dto->setTituloBase64($titulo);

        $this->assertAttributeEquals($titulo, 'TituloBase64', $this->dto);

        return $titulo;
    }

    /**
     * @depends testSetTituloBase64
     */
    public function testGetTituloBase64($titulo)
    {
        $this->dto->setTituloBase64($titulo);

        $this->assertEquals($titulo, $this->dto->getTituloBase64());
    }
}
