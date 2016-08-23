<?php

namespace PagueVeloz\Api\Common\Dto;

class TitularContaBancariaDTO extends \PagueVeloz\AbstractDTO
{
    const TIPO_PESSOA_NAODEFINIDO = 0;
    const TIPO_PESSOA_FISICA = 1;
    const TIPO_PESSOA_JURIDICA = 2;

    protected $Nome;
    protected $Documento;
    protected $TipoPessoa;

    public function getNotEmpty()
    {
        return [];
    }

    /**
     * Gets the value of Nome.
     *
     * @return mixed
     */
    public function getNome()
    {
        return $this->Nome;
    }

    /**
     * Sets the value of Nome.
     *
     * @param mixed $Nome the nome
     *
     * @return self
     */
    public function setNome($Nome)
    {
        $this->Nome = $Nome;

        return $this;
    }

    /**
     * Gets the value of Documento.
     *
     * @return mixed
     */
    public function getDocumento()
    {
        return $this->Documento;
    }

    /**
     * Sets the value of Documento.
     *
     * @param mixed $Documento the documento
     *
     * @return self
     */
    public function setDocumento($Documento)
    {
        $this->Documento = $Documento;

        return $this;
    }

    /**
     * Gets the value of TipoPessoa.
     *
     * @return mixed
     */
    public function getTipoPessoa()
    {
        return $this->TipoPessoa;
    }

    /**
     * Sets the value of TipoPessoa.
     *
     * @param mixed $TipoPessoa the tipo pessoa
     *
     * @return self
     */
    public function setTipoPessoa($TipoPessoa)
    {
        $this->TipoPessoa = $TipoPessoa;

        return $this;
    }
}
