<?php

namespace PagueVeloz\Api\Cartao\v1\Dto;

class ConfirmacaoDTO extends \PagueVeloz\AbstractDTO
{
    protected $Id;
    protected $Confirmado = false;

    public function getNotEmpty()
    {
        return [
                'Id',
                'Confirmado',
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
