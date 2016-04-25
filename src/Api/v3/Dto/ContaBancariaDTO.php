<?php

namespace PagueVeloz\Api\v3\Dto;

use PagueVeloz\Api\Common\Dto\TitularContaBancariaDTO;

class ContaBancariaDTO extends \PagueVeloz\AbstractDTO
{
    const STATUS_CONTA_BANCARIA_VERIFICADA = 0;
    const STATUS_CONTA_BANCARIA_NAOVERIFICADA = 1;
    const STATUS_CONTA_BANCARIA_REJEITADA = 2;
    const STATUS_CONTA_BANCARIA_VENCIDA = 3;
    const STATUS_CONTA_BANCARIA_INATIVA = 4;

    const TIPO_CONTABANCARIA_NAODEFINIDO = 0;
    const TIPO_CONTABANCARIA_CONTACORRENTE = 1;
    const TIPO_CONTABANCARIA_CONTAPOUPANCA = 2;

    const TIPO_TITULARCONTABANCARIA_PROPRIA = 0;
    const TIPO_TITULARCONTABANCARIA_SOCIO = 1;
    const TIPO_TITULARCONTABANCARIA_TERCEIRO = 2;

    protected $CodigoBanco;
    protected $CodigoAgencia;
    protected $NumeroConta;
    protected $Descricao;
    protected $Excluida;
    protected $Operacao;
    protected $DataValidadeAprovada;
    protected $DataValidadeSolicitada;
    protected $Status;
    protected $TipoConta;
    protected $TipoTitular;
    protected $Titular;
    protected $Id;

    public function __construct()
    {
        $this->setTitular(new TitularContaBancariaDTO());
    }

    public function getNotEmpty()
    {
        return [];
    }

    /**
     * Gets the value of CodigoBanco.
     *
     * @return mixed
     */
    public function getCodigoBanco()
    {
        return $this->CodigoBanco;
    }

    /**
     * Sets the value of CodigoBanco.
     *
     * @param mixed $CodigoBanco the codigo banco
     *
     * @return self
     */
    public function setCodigoBanco($CodigoBanco)
    {
        $this->CodigoBanco = $CodigoBanco;

        return $this;
    }

    /**
     * Gets the value of CodigoAgencia.
     *
     * @return mixed
     */
    public function getCodigoAgencia()
    {
        return $this->CodigoAgencia;
    }

    /**
     * Sets the value of CodigoAgencia.
     *
     * @param mixed $CodigoAgencia the codigo agencia
     *
     * @return self
     */
    public function setCodigoAgencia($CodigoAgencia)
    {
        $this->CodigoAgencia = $CodigoAgencia;

        return $this;
    }

    /**
     * Gets the value of NumeroConta.
     *
     * @return mixed
     */
    public function getNumeroConta()
    {
        return $this->NumeroConta;
    }

    /**
     * Sets the value of NumeroConta.
     *
     * @param mixed $NumeroConta the numero conta
     *
     * @return self
     */
    public function setNumeroConta($NumeroConta)
    {
        $this->NumeroConta = $NumeroConta;

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
     * Gets the value of Excluida.
     *
     * @return mixed
     */
    public function getExcluida()
    {
        return $this->Excluida;
    }

    /**
     * Sets the value of Excluida.
     *
     * @param mixed $Excluida the excluida
     *
     * @return self
     */
    public function setExcluida($Excluida)
    {
        $this->Excluida = $Excluida;

        return $this;
    }

    /**
     * Gets the value of Operacao.
     *
     * @return mixed
     */
    public function getOperacao()
    {
        return $this->Operacao;
    }

    /**
     * Sets the value of Operacao.
     *
     * @param mixed $Operacao the operacao
     *
     * @return self
     */
    public function setOperacao($Operacao)
    {
        $this->Operacao = $Operacao;

        return $this;
    }

    /**
     * Gets the value of DataValidadeAprovada.
     *
     * @return mixed
     */
    public function getDataValidadeAprovada()
    {
        return $this->DataValidadeAprovada;
    }

    /**
     * Sets the value of DataValidadeAprovada.
     *
     * @param mixed $DataValidadeAprovada the data validade aprovada
     *
     * @return self
     */
    public function setDataValidadeAprovada($DataValidadeAprovada)
    {
        $this->DataValidadeAprovada = $DataValidadeAprovada;

        return $this;
    }

    /**
     * Gets the value of DataValidadeSolicitada.
     *
     * @return mixed
     */
    public function getDataValidadeSolicitada()
    {
        return $this->DataValidadeSolicitada;
    }

    /**
     * Sets the value of DataValidadeSolicitada.
     *
     * @param mixed $DataValidadeSolicitada the data validade solicitada
     *
     * @return self
     */
    public function setDataValidadeSolicitada($DataValidadeSolicitada)
    {
        $this->DataValidadeSolicitada = $DataValidadeSolicitada;

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
     * Gets the value of TipoConta.
     *
     * @return mixed
     */
    public function getTipoConta()
    {
        return $this->TipoConta;
    }

    /**
     * Sets the value of TipoConta.
     *
     * @param mixed $TipoConta the tipo conta
     *
     * @return self
     */
    public function setTipoConta($TipoConta)
    {
        $this->TipoConta = $TipoConta;

        return $this;
    }

    /**
     * Gets the value of TipoTitular.
     *
     * @return mixed
     */
    public function getTipoTitular()
    {
        return $this->TipoTitular;
    }

    /**
     * Sets the value of TipoTitular.
     *
     * @param mixed $TipoTitular the tipo titular
     *
     * @return self
     */
    public function setTipoTitular($TipoTitular)
    {
        $this->TipoTitular = $TipoTitular;

        return $this;
    }

    /**
     * Gets the value of Titular.
     *
     * @return mixed
     */
    public function getTitular()
    {
        return $this->Titular;
    }

    /**
     * Sets the value of Titular.
     *
     * @param mixed $Titular the titular
     *
     * @return self
     */
    public function setTitular(TitularContaBancariaDTO $Titular)
    {
        $this->Titular = $Titular;

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
