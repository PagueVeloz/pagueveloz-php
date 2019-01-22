<?php

namespace PagueVeloz\Api\Common\Dto;

class TipoServicosDTO extends \PagueVeloz\AbstractDTO
{
    const TRANSFERENCIA = 1;
    const LICENCIAMENTO = 2;
    const TRANSFERENCIALICENCIAMENTO = 3;
    const LICENCIAMENTO2VIA = 4;
    const TRANSFERENCIA2VIA = 5;
    const PRIMEIROREGISTRO = 6;
    const DEBITOS = 7;
    const IPVA = 8;
    const DPVAT = 9;
    const MULTASTRANSITO = 10;
    const MULTASRENAINF = 11;
    const IPVAZERO = 81;
    const DPVATZERO = 91;
}
