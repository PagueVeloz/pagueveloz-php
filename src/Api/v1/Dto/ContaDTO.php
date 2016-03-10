<?php

namespace PagueVeloz\Api\v1\Dto;

class ContaDTO extends \PagueVeloz\AbstractDTO
{
    protected $Tipo = null; //Bancos|Clientes|ClientesBoletoZClienteJaCadastrado|SMSTelefoneDestino|SMSTelefoneRemetente

    /**
     * Gets the value of Tipo.
     *
     * @return mixed
     */
    public function getTipo()
    {
        return $this->Tipo;
    }

    /**
     * Sets the value of Tipo.
     *
     * @param mixed $Tipo the tipo
     *
     * @return self
     */
    public function setTipo($Tipo)
    {
        $this->Tipo = $Tipo;

        return $this;
    }
}
