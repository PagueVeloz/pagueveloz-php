<?php

namespace PagueVeloz\Api\v1\Transito\SP\Despachantes\Dto;

use PagueVeloz\Api\v1\Transito\SP\Despachantes\Dto\ConsultaDebitoDto;

class PgtoDebitoDto extends \PagueVeloz\AbstractDTO
{
    protected $Consulta;
    protected $Retorno;

    public function __construct()
    {
        $this->setConsulta(new ConsultaDebitoDto());
        $this->setRetorno(new \stdClass());
    }

    public function getNotEmpty()
    {
        return [
                'Consulta',
                'Retorno',
                ];
    }

    /**
     * @return mixed
     */
    public function getRetorno()
    {
        return $this->Retorno;
    }

    /**
     * @param mixed $Retorno
     *
     * @return self
     */
    public function setRetorno($Retorno)
    {
        $this->Retorno = $Retorno;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getConsulta()
    {
        return $this->Consulta;
    }

    /**
     * @param mixed $Consulta
     *
     * @return self
     */
    public function setConsulta(ConsultaDebitoDto $Consulta)
    {
        $this->Consulta = $Consulta;

        return $this;
    }
}
