<?php

namespace PagueVeloz\Api\v1\Transito\SP\Despachantes\Dto;

use PagueVeloz\Api\v1\Transito\SP\Despachantes\Dto\PgtoDebitoDto;

class PagamentoDespachanteDTO extends \PagueVeloz\AbstractDTO
{
    protected $ServicoOnline;

    public function __construct()
    {
        $this->setServicoOnline(new PgtoDebitoDto());
    }

    public function getNotEmpty()
    {
        return [
                'PgtoDebitoDto',
                ];
    }

    /**
     * @return mixed
     */
    public function getServicoOnline()
    {
        return $this->ServicoOnline;
    }

    /**
     * @param mixed $ServicoOnline
     *
     * @return self
     */
    public function setServicoOnline(PgtoDebitoDto $ServicoOnline)
    {
        $this->ServicoOnline = $ServicoOnline;

        return $this;
    }
}
