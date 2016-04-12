<?php

namespace PagueVeloz\Api\Common\Dto;

class TelefoneDTO extends \PagueVeloz\AbstractDTO
{
    protected $Numero = null;
    protected $Tipo = null;
    protected $Observacao = null;
    protected $Id = null;


    public function getNotEmpty()
    {
        return [];
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
     * Gets the value of Tipo.
     *
     * @return mixed
     */
    public function getTipo()
    {
        return $this->Tipo;
    }

    /**
     * Sets the value of Tipo.
     *
     * @param mixed $Tipo the tipo
     *
     * @return self
     */
    public function setTipo($Tipo)
    {
        $this->Tipo = $Tipo;

        return $this;
    }

    /**
     * Gets the value of Observacao.
     *
     * @return mixed
     */
    public function getObservacao()
    {
        return $this->Observacao;
    }

    /**
     * Sets the value of Observacao.
     *
     * @param mixed $Observacao the observacao
     *
     * @return self
     */
    public function setObservacao($Observacao)
    {
        $this->Observacao = $Observacao;

        return $this;
    }

    /**
     * Gets the value of Id.
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Sets the value of Id.
     *
     * @param mixed $Id the id
     *
     * @return self
     */
    public function setId($Id)
    {
        $this->Id = $Id;

        return $this;
    }
}
