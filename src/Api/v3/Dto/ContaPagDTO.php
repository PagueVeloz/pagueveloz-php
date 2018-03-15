<?php

namespace PagueVeloz\Api\v3\Dto;

use PagueVeloz\Api\v3\Dto\TituloDTO;

final class ContaPagDTO extends \PagueVeloz\AbstractDTO
{
    protected $ConsultaId;
    protected $Descricao;
    protected $Vencimento;
    protected $Valor;
    protected $PermiteAlterarValor;
    protected $Desconto;
    protected $Acrescimos;
    protected $Agendamento;
    protected $Titulo;

    public function __construct()
    {
        $this->setTitulo(new TituloDTO());
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->Descricao;
    }

    /**
     * @param mixed $Descricao
     *
     * @return self
     */
    public function setDescricao($Descricao)
    {
        $this->Descricao = $Descricao;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getVencimento()
    {
        return $this->Vencimento;
    }

    /**
     * @param mixed $Vencimento
     *
     * @return self
     */
    public function setVencimento($Vencimento)
    {
        $this->Vencimento = $Vencimento;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getValor()
    {
        return $this->Valor;
    }

    /**
     * @param mixed $Valor
     *
     * @return self
     */
    public function setValor($Valor)
    {
        $this->Valor = $Valor;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPermiteAlterarValor()
    {
        return $this->PermiteAlterarValor;
    }

    /**
     * @param mixed $PermiteAlterarValor
     *
     * @return self
     */
    public function setPermiteAlterarValor($PermiteAlterarValor)
    {
        $this->PermiteAlterarValor = $PermiteAlterarValor;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDesconto()
    {
        return $this->Desconto;
    }

    /**
     * @param mixed $Desconto
     *
     * @return self
     */
    public function setDesconto($Desconto)
    {
        $this->Desconto = $Desconto;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAcrescimos()
    {
        return $this->Acrescimos;
    }

    /**
     * @param mixed $Acrescimos
     *
     * @return self
     */
    public function setAcrescimos($Acrescimos)
    {
        $this->Acrescimos = $Acrescimos;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAgendamento()
    {
        return $this->Agendamento;
    }

    /**
     * @param mixed $Agendamento
     *
     * @return self
     */
    public function setAgendamento($Agendamento)
    {
        $this->Agendamento = $Agendamento;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitulo()
    {
        return $this->Titulo;
    }

    /**
     * @param mixed $Titulo
     *
     * @return self
     */
    public function setTitulo(TituloDTO $Titulo)
    {
        $this->Titulo = $Titulo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getConsultaId()
    {
        return $this->ConsultaId;
    }

    /**
     * @param mixed $ConsultaId
     *
     * @return self
     */
    public function setConsultaId($ConsultaId)
    {
        $this->ConsultaId = $ConsultaId;

        return $this;
    }
}
