<?php

namespace PagueVeloz\Api\Cartao\v1\Dto;

class ParcelamentoDTO extends \PagueVeloz\AbstractDTO
{
    protected $Bandeira = null;
    protected $Valor = 0;

    public function getNotEmpty()
    {
        return [
                'Bandeira',
                'Valor',
                ];
    }

    /**
     * Gets the value of Bandeira.
     *
     * @return mixed
     */
    public function getBandeira()
    {
        return $this->Bandeira;
    }

    /**
     * Sets the value of Bandeira.
     *
     * @param mixed $Bandeira the bandeira
     *
     * @return self
     */
    public function setBandeira($Bandeira)
    {
        $this->Bandeira = $Bandeira;

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
}
