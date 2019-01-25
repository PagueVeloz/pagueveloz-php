<?php

namespace PagueVeloz\Api\v1\Transito\SP\Despachantes\Dto;

class ConsultaDebitoDto extends \PagueVeloz\AbstractDTO
{
    protected $VeiculoNovo = false;
    protected $Servico;

    public function getNotEmpty()
    {
        return [
                'VeiculoNovo',
                'Servico',
                ];
    }

    /**
     * @return mixed
     */
    public function getVeiculoNovo()
    {
        return $this->VeiculoNovo;
    }

    /**
     * @param mixed $VeiculoNovo
     *
     * @return self
     */
    public function setVeiculoNovo($VeiculoNovo)
    {
        $this->VeiculoNovo = $VeiculoNovo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getServico()
    {
        return $this->Servico;
    }

    /**
     * @param mixed $Servico
     *
     * @return self
     */
    public function setServico($Servico)
    {
        $this->Servico = $Servico;

        return $this;
    }
}
