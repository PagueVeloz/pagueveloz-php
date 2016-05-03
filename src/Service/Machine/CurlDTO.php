<?php

namespace PagueVeloz\Service\Machine;

class CurlDTO extends \PagueVeloz\ObjectFactory
{
    protected $host = null;
    protected $url = null;
    protected $urlReferer = null;
    protected $method = 'GET';
    protected $headers = [];
    protected $proxy = false;
    protected $ssl = false;
    protected $log = false;
}
