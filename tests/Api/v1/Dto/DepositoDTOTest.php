<?php

namespace PagueVeloz\Api\v1\Dto;

use TestCase;

class DepositoDTOTest extends TestCase {

    protected $dto;

    public function setUp()
    {
        parent::setUp();

        $this->dto = new DepositoDTO;
    }

    public function testSetBanco()
    {
        $banco = $this->faker->word;

        $this->dto->setBanco($banco);

        $this->assertAttributeEquals($banco, 'Banco', $this->dto);

        return $banco;
    }

    /**
     * @depends testSetBanco
     */
    public function testGetBanco($banco)
    {
        $this->dto->setBanco($banco);

        $this->assertEquals($banco, $this->dto->getBanco());
    }

    public function testSetStatus()
    {
        $status = $this->faker->randomElement(['A','I']);

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

    public function testSetDataSolicitacao()
    {
        $data = $this->faker->iso8601;

        $this->dto->setDataSolicitacao($data);

        $this->assertAttributeEquals($data, 'DataSolicitacao', $this->dto);

        return $data;
    }

    /**
     * @depends testSetDataSolicitacao
     */
    public function testGetDataSolicitacao($data)
    {
        $this->dto->setDataSolicitacao($data);

        $this->assertEquals($data, $this->dto->getDataSolicitacao());
    }

    public function testSetDataProcessamento()
    {
        $data = $this->faker->iso8601;

        $this->dto->setDataProcessamento($data);

        $this->assertAttributeEquals($data, 'DataProcessamento', $this->dto);

        return $data;
    }

    /**
     * @depends testSetDataProcessamento
     */
    public function testGetDataProcessamento($data)
    {
        $this->dto->setDataProcessamento($data);

        $this->assertEquals($data, $this->dto->getDataProcessamento());
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

    public function testSetComentarios()
    {
        $comentarios = $this->faker->randomElements;

        $this->dto->setComentarios($comentarios);

        $this->assertAttributeEquals($comentarios, 'Comentarios', $this->dto);

        return $comentarios;
    }

    /**
     * @depends testSetComentarios
     */
    public function testGetComentarios($comentarios)
    {
        $this->dto->setComentarios($comentarios);

        $this->assertEquals($comentarios, $this->dto->getComentarios());
    }

    public function testSetComprovanteBase64()
    {
        $comprovante = base64_encode($this->faker->sentence);

        $this->dto->setComprovanteBase64($comprovante);

        $this->assertAttributeEquals($comprovante, 'ComprovanteBase64', $this->dto);

        return $comprovante;
    }

    /**
     * @depends testSetComprovanteBase64
     */
    public function testGetComprovanteBase64($comprovante)
    {
        $this->dto->setComprovanteBase64($comprovante);

        $this->assertEquals($comprovante, $this->dto->getComprovanteBase64());
    }

    public function testSetNomeArquivoComprovante()
    {
        $nome = $this->faker->word;

        $this->dto->setNomeArquivoComprovante($nome);

        $this->assertAttributeEquals($nome, 'NomeArquivoComprovante', $this->dto);

        return $nome;
    }

    /**
     * @depends testSetNomeArquivoComprovante
     */
    public function testGetNomeArquivoComprovante($nome)
    {
        $this->dto->setNomeArquivoComprovante($nome);

        $this->assertEquals($nome, $this->dto->getNomeArquivoComprovante());
    }

    public function testSetContaBancaria()
    {
        $conta = new ContaBancariaDTO;

        $this->dto->setContaBancaria($conta);

        $this->assertAttributeEquals($conta, 'ContaBancaria', $this->dto);

        return $conta;
    }

    /**
     * @depends testSetContaBancaria
     */
    public function testGetContaBancaria($conta)
    {
        $this->dto->setContaBancaria($conta);

        $this->assertEquals($conta, $this->dto->getContaBancaria());
    }
}
