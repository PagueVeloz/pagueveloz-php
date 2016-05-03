<?php

namespace PagueVeloz\Exception;

class UrlNotSetException extends InvalidInputException
{
    protected $message = "URL do PagueVeloz não informada";
}
