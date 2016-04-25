<?php

namespace PagueVeloz;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;

abstract class LogProvider
{
    protected static function Handler($level)
    {
        $logger = new Logger('PagueVeloz');
        $logger->pushHandler(new StreamHandler(self::CurrentStream(), $level));

        return $logger;
    }

    public static function CurrentStream()
    {
        $currentDate = new \DateTime();

        return sprintf(__DIR__.'/../logs/PagueVeloz_%s.log', $currentDate->format('Ymd'));
    }

    public static function Info($info, $inputs = [])
    {
        self::Handler(Logger::INFO)->addInfo($info, $inputs);
    }

    public static function Error($error, $inputs = [])
    {
        self::Handler(Logger::ERROR)->addError($error, $inputs);
    }
}
