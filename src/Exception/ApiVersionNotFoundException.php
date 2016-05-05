<?php

namespace PagueVeloz\Exception;

class ApiVersionNotFound extends InvalidInputException
{
    protected $message = 'Versão da API não encontrada';
}
