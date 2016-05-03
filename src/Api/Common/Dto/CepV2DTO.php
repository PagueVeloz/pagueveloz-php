<?php

namespace PagueVeloz\Api\Common\Dto;

class CepV2DTO extends \PagueVeloz\AbstractDTO
{
    protected $Cidade = null;
    protected $Logradouro = null;
    protected $Numero = null;
    protected $CEP = null;
    protected $Bairro = null;
    protected $Complemento = null;

    public function __construct()
    {
        $this->setCidade(new CidadeDTO());
    }

    public function getNotEmpty()
    {
        return [];
    }

    /**
     * Gets the value of Cidade.
     *
     * @return mixed
     */
    public function getCidade()
    {
        return $this->Cidade;
    }

    /**
     * Sets the value of Cidade.
     *
     * @param mixed $Cidade the cidade
     *
     * @return self
     */
    public function setCidade(CidadeDTO $Cidade)
    {
        $this->Cidade = $Cidade;

        return $this;
    }

    /**
     * Gets the value of Logradouro.
     *
     * @return mixed
     */
    public function getLogradouro()
    {
        return $this->Logradouro;
    }

    /**
     * Sets the value of Logradouro.
     *
     * @param mixed $Logradouro the logradouro
     *
     * @return self
     */
    public function setLogradouro($Logradouro)
    {
        $this->Logradouro = $Logradouro;

        return $this;
    }

    /**
     * Gets the value of Numero.
     *
     * @return mixed
     */
    public function getNumero()
    {
        return $this->Numero;
    }

    /**
     * Sets the value of Numero.
     *
     * @param mixed $Numero the numero
     *
     * @return self
     */
    public function setNumero($Numero)
    {
        $this->Numero = $Numero;

        return $this;
    }

    /**
     * Gets the value of CEP.
     *
     * @return mixed
     */
    public function getCEP()
    {
        return $this->CEP;
    }

    /**
     * Sets the value of CEP.
     *
     * @param mixed $CEP the
     *
     * @return self
     */
    public function setCEP($CEP)
    {
        $this->CEP = $CEP;

        return $this;
    }

    /**
     * Gets the value of Bairro.
     *
     * @return mixed
     */
    public function getBairro()
    {
        return $this->Bairro;
    }

    /**
     * Sets the value of Bairro.
     *
     * @param mixed $Bairro the
     *
     * @return self
     */
    public function setBairro($Bairro)
    {
        $this->Bairro = $Bairro;

        return $this;
    }

    /**
     * Gets the value of Complemento.
     *
     * @return mixed
     */
    public function getComplemento()
    {
        return $this->Complemento;
    }

    /**
     * Sets the value of Complemento.
     *
     * @param mixed $Complemento the
     *
     * @return self
     */
    public function setComplemento($Complemento)
    {
        $this->Complemento = $Complemento;

        return $this;
    }
}
