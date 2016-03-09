<?php

namespace PagueVeloz\Api\Cartao\v1\Dto;

class PagamentoDTO extends \PagueVeloz\AbstractDTO
{
    protected $Id;
    protected $NumeroCartao;
    protected $CodigoSeguranca;
    protected $Validade;
    protected $Confirmado = false;

    public function getNotEmpty()
    {
        return [
                'Id',
                'NumeroCartao',
                'CodigoSeguranca',
                'Validade',
                ];
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

    /**
     * Gets the value of NumeroCartao.
     *
     * @return mixed
     */
    public function getNumeroCartao()
    {
        return $this->NumeroCartao;
    }

    /**
     * Sets the value of NumeroCartao.
     *
     * @param mixed $NumeroCartao the numero cartao
     *
     * @return self
     */
    public function setNumeroCartao($NumeroCartao)
    {
        $this->NumeroCartao = preg_replace('/[^0-9]/', '', $NumeroCartao);

        return $this;
    }

    /**
     * Gets the value of CodigoSeguranca.
     *
     * @return mixed
     */
    public function getCodigoSeguranca()
    {
        return $this->CodigoSeguranca;
    }

    /**
     * Sets the value of CodigoSeguranca.
     *
     * @param mixed $CodigoSeguranca the cod seguranca
     *
     * @return self
     */
    public function setCodigoSeguranca($CodigoSeguranca)
    {
        $this->CodigoSeguranca = preg_replace('/[^0-9]/', '', $CodigoSeguranca);

        return $this;
    }

    /**
     * Gets the value of Validade.
     *
     * @return mixed
     */
    public function getValidade()
    {
        return $this->Validade;
    }

    /**
     * Sets the value of Validade.
     *
     * @param mixed $Validade the validade
     *
     * @return self
     */
    public function setValidade($Validade)
    {
        $this->Validade = preg_replace('/[^0-9]/', '', $Validade);

        return $this;
    }

    /**
     * Gets the value of Confirmado.
     *
     * @return mixed
     */
    public function getConfirmado()
    {
        return $this->Confirmado;
    }

    /**
     * Sets the value of Confirmado.
     *
     * @param mixed $Confirmado the confirmado
     *
     * @return self
     */
    public function setConfirmado($Confirmado)
    {
        $this->Confirmado = $Confirmado;

        return $this;
    }
}
