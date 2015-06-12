<?php

namespace PagueVeloz\Service\Context;

/**
 * HttpResponse.php
 *
 *
 * @author Cristian B. dos Santos <cristian.deveng@gmail.com>
 * @copyright 2015
 * @version 1.0v
*/
class HttpResponse extends \PagueVeloz\ObjectFactory
{

	protected $status = 200;
	protected $contentType = "Content-type: application/json";
	protected $headers = null;
	protected $body = null;
}
