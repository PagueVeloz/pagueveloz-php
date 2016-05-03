<?php

namespace PagueVeloz\Exception;

class UrlCartaoNotSetException extends InvalidInputException
{
    protected $message = "URL de cartão do PagueVeloz não informada";
}
