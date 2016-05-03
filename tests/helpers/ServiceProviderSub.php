<?php

namespace PagueVeloz;

class ServiceProviderSub extends ServiceProvider {
    public function __construct(){
        PagueVeloz::$url = getenv('SANDBOX_URL');
        parent::__construct();
    }
}
