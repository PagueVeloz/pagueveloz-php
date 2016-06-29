<?php

namespace PagueVeloz\Api\Common\Dto;

use TestCase;

class CepV2DTOTest extends TestCase
{
    protected $dto;

    public function setUp()
    {
        parent::setUp();

        $this->dto = new CepV2DTO();
    }

    public function testGetNotEmpty()
    {
        $this->assertEquals($this->dto->getNotEmpty(), []);
    }

    public function testGetCidade()
    {
        $this->assertInstanceOf('PagueVeloz\Api\Common\Dto\CidadeDTO', $this->dto->getCidade());
    }

    public function testSetCidade()
    {
        $cidade = new CidadeDTO();

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
        $numero = $this->faker->numerify(123);

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

    public function testSetBairro()
    {
        $bairro = $this->faker->streetName;

        $this->dto->setBairro($bairro);

        $this->assertAttributeEquals($bairro, 'Bairro', $this->dto);

        return $bairro;
    }

    /**
     * @depends testSetBairro
     */
    public function testGetBairro($bairro)
    {
        $this->dto->setBairro($bairro);

        $this->assertEquals($bairro, $this->dto->getBairro());
    }

    public function testSetComplemento()
    {
        $complemento = $this->faker->streetName;

        $this->dto->setComplemento($complemento);

        $this->assertAttributeEquals($complemento, 'Complemento', $this->dto);

        return $complemento;
    }

    /**
     * @depends testSetComplemento
     */
    public function testGetComplemento($complemento)
    {
        $this->dto->setComplemento($complemento);

        $this->assertEquals($complemento, $this->dto->getComplemento());
    }
}
