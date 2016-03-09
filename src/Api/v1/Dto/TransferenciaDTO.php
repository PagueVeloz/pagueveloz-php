<?php

namespace PagueVeloz\Api\v1\Dto;

class TransferenciaDTO extends \PagueVeloz\AbstractDTO
{
    protected $ClienteDestino;
    protected $Valor;
    protected $Descricao;
    protected $DataInicial;
    protected $DataFinal;
    protected $Id;

    /**
     * Gets the value of ClienteDestino.
     *
     * @return mixed
     */
    public function getClienteDestino()
    {
        return $this->ClienteDestino;
    }

    /**
     * Sets the value of ClienteDestino.
     *
     * @param mixed $ClienteDestino the cliente destino
     *
     * @return self
     */
    public function setClienteDestino($ClienteDestino)
    {
        $this->ClienteDestino = $ClienteDestino;

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
     * Gets the value of Descricao.
     *
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->Descricao;
    }

    /**
     * Sets the value of Descricao.
     *
     * @param mixed $Descricao the descricao
     *
     * @return self
     */
    public function setDescricao($Descricao)
    {
        $this->Descricao = $Descricao;

        return $this;
    }

    /**
     * Gets the value of DataInicial.
     *
     * @return mixed
     */
    public function getDataInicial()
    {
        return $this->DataInicial;
    }

    /**
     * Sets the value of DataInicial.
     *
     * @param mixed $DataInicial the data inicial
     *
     * @return self
     */
    public function setDataInicial($DataInicial)
    {
        $this->DataInicial = $DataInicial;

        return $this;
    }

    /**
     * Gets the value of DataFinal.
     *
     * @return mixed
     */
    public function getDataFinal()
    {
        return $this->DataFinal;
    }

    /**
     * Sets the value of DataFinal.
     *
     * @param mixed $DataFinal the data final
     *
     * @return self
     */
    public function setDataFinal($DataFinal)
    {
        $this->DataFinal = $DataFinal;

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
