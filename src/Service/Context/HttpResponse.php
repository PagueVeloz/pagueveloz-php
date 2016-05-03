<?php

namespace PagueVeloz\Service\Context;

class HttpResponse extends \PagueVeloz\ObjectFactory
{
    protected $status = 200;

    protected $contentType = 'Content-type: application/json';

    protected $headers = null;

    protected $body = null;
}
