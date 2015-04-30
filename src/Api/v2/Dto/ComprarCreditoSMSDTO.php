<?php

namespace PagueVeloz\Api\v2\Dto;


class ComprarCreditoSMSDTO extends \PagueVeloz\AbstractDTO
{
    protected $Creditos;
    protected $Valor;
    protected $FormaPagto;
    protected $Id;

    /**
     * Gets the value of Creditos.
     *
     * @return mixed
     */
    public function getCreditos()
    {
        return $this->Creditos;
    }

    /**
     * Sets the value of Creditos.
     *
     * @param mixed $Creditos the creditos
     *
     * @return self
     */
    public function setCreditos($Creditos)
    {
        $this->Creditos = $Creditos;

        return $this;
    }

    /**
     * Gets the value of Valor.
     *
     * @return mixed
     */
    public function getValor()
    {
        return $this->Valor;
    }

    /**
     * Sets the value of Valor.
     *
     * @param mixed $Valor the valor
     *
     * @return self
     */
    public function setValor($Valor)
    {
        $this->Valor = $Valor;

        return $this;
    }

    /**
     * Gets the value of FormaPagto.
     *
     * @return mixed
     */
    public function getFormaPagto()
    {
        return $this->FormaPagto;
    }

    /**
     * Sets the value of FormaPagto.
     *
     * @param mixed $FormaPagto the forma pagto
     *
     * @return self
     */
    public function setFormaPagto($FormaPagto)
    {
        $this->FormaPagto = $FormaPagto;

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
