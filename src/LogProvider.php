<?php

namespace PagueVeloz;

use \Monolog\Logger;
use \Monolog\Handler\StreamHandler;

abstract class LogProvider
{

	public static function Info($info, $inputs)
	{
		$_data = new \DateTime();

		if (empty($inputs))
			$inputs = array();


		$_path = sprintf('%s/Logs/PagueVeloz_%s.log', __DIR__, $_data->format('Ymd'));

		$log = new Logger('PagueVeloz');
		$log->pushHandler(new StreamHandler($_path, Logger::INFO));

		$log->addInfo($info, $inputs);
	}


	public static function Error($info, $inputs)
	{
		$_data = new \DateTime();

		if (empty($inputs))
			$inputs = array();


		$_path = sprintf('%s/Logs/PagueVeloz_%s.log', __DIR__, $_data->format('Ymd'));

		$log = new Logger('PagueVeloz');
		$log->pushHandler(new StreamHandler($_path, Logger::ERROR));

		$log->addError($info, $inputs);
	}
}
