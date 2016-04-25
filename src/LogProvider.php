<?php

namespace PagueVeloz;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;

abstract class LogProvider
{
    /**
     * Get the log handler.
     *
     * @return Monolog\Logger
     */
    protected static function Handler($level)
    {
        $logger = new Logger('PagueVeloz');
        $logger->pushHandler(new StreamHandler(self::CurrentStream(), $level));

        return $logger;
    }

    /**
     * Get the current stream.
     *
     * @return string
     */
    public static function CurrentStream()
    {
        $currentDate = new \DateTime();

        return sprintf(__DIR__.'/../logs/PagueVeloz_%s.log', $currentDate->format('Ymd'));
    }

    /**
     * Register a Info level log message.
     */
    public static function Info($info, $inputs = [])
    {
        self::Handler(Logger::INFO)->addInfo($info, $inputs);
    }

    /**
     * Register a Error level log message.
     */
    public static function Error($error, $inputs = [])
    {
        self::Handler(Logger::ERROR)->addError($error, $inputs);
    }
}
