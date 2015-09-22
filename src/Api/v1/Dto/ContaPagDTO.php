<?php

namespace PagueVeloz\Api\v1\Dto;

class ContaPagDTO extends \PagueVeloz\AbstractDTO
{
    protected $Valor;
    protected $Titulo;
    protected $NomeTitulo;
    protected $Vencimento;
    protected $CodigoDeBarras;

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
     * Gets the value of Titulo.
     *
     * @return mixed
     */
    public function getTitulo()
    {
        return $this->Titulo;
    }

    /**
     * Sets the value of Titulo.
     *
     * @param mixed $Titulo the titulo
     *
     * @return self
     */
    public function setTitulo($Titulo)
    {
        $this->Titulo = $Titulo;

        return $this;
    }

    /**
     * Gets the value of NomeTitulo.
     *
     * @return mixed
     */
    public function getNomeTitulo()
    {
        return $this->NomeTitulo;
    }

    /**
     * Sets the value of NomeTitulo.
     *
     * @param mixed $NomeTitulo the nome titulo
     *
     * @return self
     */
    public function setNomeTitulo($NomeTitulo)
    {
        $this->NomeTitulo = $NomeTitulo;

        return $this;
    }

    /**
     * Gets the value of Vencimento.
     *
     * @return mixed
     */
    public function getVencimento()
    {
        return $this->Vencimento;
    }

    /**
     * Sets the value of Vencimento.
     *
     * @param mixed $Vencimento the vencimento
     *
     * @return self
     */
    public function setVencimento($Vencimento)
    {
        $this->Vencimento = $Vencimento;

        return $this;
    }

    /**
     * Gets the value of CodigoDeBarras.
     *
     * @return mixed
     */
    public function getCodigoDeBarras()
    {
        return $this->CodigoDeBarras;
    }

    /**
     * Sets the value of CodigoDeBarras.
     *
     * @param mixed $CodigoDeBarras the codigo de barras
     *
     * @return self
     */
    public function setCodigoDeBarras($CodigoDeBarras)
    {
        $this->CodigoDeBarras = $CodigoDeBarras;

        return $this;
    }
}
