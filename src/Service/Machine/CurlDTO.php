<?php

namespace PagueVeloz\Service\Machine;


/**
 * CurlDTO.php
 *
 *
 * @author Cristian B. dos Santos <cristian.deveng@gmail.com>
 * @copyright 2015
 * @version 1.0v
*/
class CurlDTO extends \PagueVeloz\ObjectFactory
{
	protected $host       = null;
	protected $url        = null;
	protected $urlReferer = null;
	protected $method     = 'GET';
	protected $headers    = array();
	protected $proxy      = FALSE;
	protected $ssl        = FALSE;
	protected $log        = FALSE;
}
