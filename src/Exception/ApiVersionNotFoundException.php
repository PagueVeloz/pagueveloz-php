<?php

namespace PagueVeloz\Exception;

class ApiVersionNotFoundException extends InvalidInputException
{
    protected $message = 'Versão da API não encontrada';
}
