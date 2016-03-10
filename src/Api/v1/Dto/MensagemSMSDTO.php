<?php

namespace PagueVeloz\Api\v1\Dto;

class MensagemSMSDTO extends \PagueVeloz\AbstractDTO
{
    protected $SeuId;
    protected $TelefoneRemetente;
    protected $TelefoneDestino;
    protected $Conteudo;
    protected $AgendarPara;
    protected $Status; //0 = NaoDefinido | 1 = Pendente | 2 = Enviada | 3= EntregueOperadora | 4 = FalhaNoEnvio | 9 = Cancelada
    protected $DataInicial;
    protected $DataFinal;
    protected $Id;

    /**
     * Gets the value of SeuId.
     *
     * @return mixed
     */
    public function getSeuId()
    {
        return $this->SeuId;
    }

    /**
     * Sets the value of SeuId.
     *
     * @param mixed $SeuId the seu id
     *
     * @return self
     */
    public function setSeuId($SeuId)
    {
        $this->SeuId = $SeuId;

        return $this;
    }

    /**
     * Gets the value of TelefoneRemetente.
     *
     * @return mixed
     */
    public function getTelefoneRemetente()
    {
        return $this->TelefoneRemetente;
    }

    /**
     * Sets the value of TelefoneRemetente.
     *
     * @param mixed $TelefoneRemetente the telefone remetente
     *
     * @return self
     */
    public function setTelefoneRemetente($TelefoneRemetente)
    {
        $this->TelefoneRemetente = $TelefoneRemetente;

        return $this;
    }

    /**
     * Gets the value of TelefoneDestino.
     *
     * @return mixed
     */
    public function getTelefoneDestino()
    {
        return $this->TelefoneDestino;
    }

    /**
     * Sets the value of TelefoneDestino.
     *
     * @param mixed $TelefoneDestino the telefone destino
     *
     * @return self
     */
    public function setTelefoneDestino($TelefoneDestino)
    {
        $this->TelefoneDestino = $TelefoneDestino;

        return $this;
    }

    /**
     * Gets the value of Conteudo.
     *
     * @return mixed
     */
    public function getConteudo()
    {
        return $this->Conteudo;
    }

    /**
     * Sets the value of Conteudo.
     *
     * @param mixed $Conteudo the conteudo
     *
     * @return self
     */
    public function setConteudo($Conteudo)
    {
        $this->Conteudo = $Conteudo;

        return $this;
    }

    /**
     * Gets the value of AgendarPara.
     *
     * @return mixed
     */
    public function getAgendarPara()
    {
        return $this->AgendarPara;
    }

    /**
     * Sets the value of AgendarPara.
     *
     * @param mixed $AgendarPara the agendar para
     *
     * @return self
     */
    public function setAgendarPara($AgendarPara)
    {
        $this->AgendarPara = $AgendarPara;

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
