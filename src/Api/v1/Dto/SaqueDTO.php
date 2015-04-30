<?php

namespace PagueVeloz\Api\v1\Dto;


class SaqueDTO extends \PagueVeloz\AbstractDTO
{
    protected $ContaBancaria;
    protected $Status;
    protected $Valor;
    protected $DataProcessamento;
    protected $Id;
   

    /**
     * Gets the value of ContaBancaria.
     *
     * @return mixed
     */
    public function getContaBancaria()
    {
        return $this->ContaBancaria;
    }

    /**
     * Sets the value of ContaBancaria.
     *
     * @param mixed $ContaBancaria the conta bancaria
     *
     * @return self
     */
    public function setContaBancaria($ContaBancaria)
    {
        $this->ContaBancaria = $ContaBancaria;

        return $this;
    }

    /**
     * Gets the value of Status.
     *
     * @return mixed
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * Sets the value of Status.
     *
     * @param mixed $Status the status
     *
     * @return self
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;

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
     * Gets the value of DataProcessamento.
     *
     * @return mixed
     */
    public function getDataProcessamento()
    {
        return $this->DataProcessamento;
    }

    /**
     * Sets the value of DataProcessamento.
     *
     * @param mixed $DataProcessamento the data processamento
     *
     * @return self
     */
    public function setDataProcessamento($DataProcessamento)
    {
        $this->DataProcessamento = $DataProcessamento;

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
