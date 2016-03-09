<?php

namespace PagueVeloz\Api\v1\Dto;

class TarifarBoletoDTO extends \PagueVeloz\AbstractDTO
{
    protected $Boleto;

    /**
     * Gets the value of Boleto.
     *
     * @return mixed
     */
    public function getBoleto()
    {
        return $this->Boleto;
    }

    /**
     * Sets the value of Boleto.
     *
     * @param mixed $Boleto the Boleto
     *
     * @return self
     */
    public function setBoleto($Boleto)
    {
        $this->Boleto = $Boleto;

        return $this;
    }
}
