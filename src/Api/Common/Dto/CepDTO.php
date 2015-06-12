<?php

namespace PagueVeloz\Api\Common\Dto;

use \PagueVeloz\Api\Common\Dto\CidadeDTO;

class CepDTO extends \PagueVeloz\AbstractDTO
{
    protected $Cidade = NULL;
    protected $Logradouro = NULL;
    protected $Numero = NULL;
    protected $CEP = NULL;

    public function __construct()
    {
        $this->setCidade(new CidadeDTO);
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
}
