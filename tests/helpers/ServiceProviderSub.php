<?php

namespace PagueVeloz;

class ServiceProviderSub extends ServiceProvider
{
    public function __construct()
    {
        PagueVeloz::$url = getenv('PAGUEVELOZ_SANDBOX_URL');
        parent::__construct();
    }
}
