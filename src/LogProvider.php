<?php

namespace PagueVeloz;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;

abstract class LogProvider
{
    const LAST_LOG_SESSION_KEY = 'PAGUEVELOZ_LAST_LOG_MESSAGE';

    protected static $debug = false;

    protected static function Path() 
    {
        $currentDate = new \DateTime();
        return sprintf(__DIR__ . '/../logs/PagueVeloz_%s.log', $currentDate->format('Ymd'));
    }  

    protected static function Handler($level)
    {
        $logger = new Logger('PagueVeloz');
        $logger->pushHandler(new StreamHandler(self::Path(), $level));
        return $logger;
    }

    public static function Info($info, $inputs = [])
    {
        self::Handler(Logger::INFO)->addInfo($info, $inputs);

        if(self::$debug) {
            $_SESSION[self::LAST_LOG_SESSION_KEY] = $info . implode(',', $inputs);
        }
    }

    public static function Error($error, $inputs = [])
    {
        self::Handler(Logger::ERROR)->addError($error, $inputs);
        
        if(self::$debug) {
            $_SESSION[self::LAST_LOG_SESSION_KEY] = $error . implode(',', $inputs);
        }
    }
}
