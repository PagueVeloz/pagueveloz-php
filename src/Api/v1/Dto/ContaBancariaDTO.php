<?php

namespace PagueVeloz\Api\v1\Dto;


class ContaBancariaDTO extends \PagueVeloz\AbstractDTO
{
    protected $CodigoBanco;
    protected $CodigoAgencia;
    protected $NumeroConta;
    protected $Descricao;
    protected $Excluida;
    protected $Id;

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
