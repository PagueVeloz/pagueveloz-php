<?php

namespace PagueVeloz\Service\Machine;

class CurlDTO extends \PagueVeloz\ObjectFactory
{
    protected $host;
    protected $url;
    protected $urlReferer;
    protected $method = 'GET';
    protected $headers = [];
    protected $proxy = false;
    protected $ssl = false;
    protected $log = false;
}
