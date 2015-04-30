<?php

namespace PagueVeloz\Service\Machine;

/**
 * Curl.php
 * 
 * 
 * @author Cristian B. dos Santos <cristian.deveng@gmail.com>
 * @copyright 2015
 * @version 1.0v
*/

use \PagueVeloz\Service\Context\HttpResponse,
    \PagueVeloz\Service\Context\HttpRequest;

use \PagueVeloz\LogProvider;

class Curl extends \PagueVeloz\Service\Machine\CurlDTO implements \PagueVeloz\Service\Interfaces\InterfaceCurl
{
	
	protected $request;

	public function headers()
    {
        $pos = strpos($this->request, "\r\n\r\n");
        return explode("\r\n", substr($this->request, 0, $pos));
    }

    public function body()
    {
        $pos  = strpos($this->request, "\r\n\r\n");
        $body = substr($this->request, $pos+4);

        if ($this->proxy)
        {
            $pos  = strpos($body, "\r\n\r\n");
            $body = substr($body, $pos+4);
        }

        return $body;
    }

	public function init(HttpRequest $request = null)
	{
       
		$init = curl_init();

        curl_setopt($init, CURLOPT_URL, $this->url);

        if (!empty($this->urlReferer))
            curl_setopt($init, CURLOPT_REFERER, $this->urlReferer);

        curl_setopt($init, CURLOPT_CUSTOMREQUEST, $this->method);

        if (!empty($request) && in_array($this->method, array('POST','PUT')))
            curl_setopt($init, CURLOPT_POSTFIELDS, $request->body);
        
        curl_setopt($init, CURLOPT_RETURNTRANSFER, 1);
        
        curl_setopt($init, CURLOPT_HEADER, 1);

        if (!empty($this->headers))
        	curl_setopt($init, CURLOPT_HTTPHEADER, $this->headers);

        if ($this->proxy)
        	curl_setopt($init, CURLOPT_PROXY, '127.0.0.1:8888');

        if ($this->ssl)
        {
	        curl_setopt($init, CURLOPT_SSL_VERIFYHOST, 0);
	        curl_setopt($init, CURLOPT_SSL_VERIFYPEER, 0);
	    }

        
       
        $this->request = curl_exec($init);

       

	    $response = new HttpResponse;
		
		$response->headers     = $this->headers();
		$response->status      = !empty($this->request) ? substr($response->headers[0], 9, 3) : 204;
		$response->contentType = !empty($this->request) ? implode(';',array_filter($this->headers(), function($header)
															        	{
															        		if (preg_match('/^Content-Type:\s*([^;]*)/mi', $header))
															        			return $header;
															        	})) : NULL;
	    $response->body = $this->body();

        curl_close($init);

        if ($this->log)
        {
            
            LogProvider::Info(sprintf('Request (%s)',$this->url.' '.$this->method), json_decode($request->body, true));
            LogProvider::Info(sprintf('Headers (%s)',$this->url), $this->headers);
            LogProvider::Info(sprintf('Response RAW (%s)',$this->url.' '.$this->method), array($this->request));
            LogProvider::Info(sprintf('Response  (%s)',$this->url.' '.$this->method), $response->toArray());

            /*if (!in_array($response->status, array(200,201)))
                LogProvider::Error(sprintf('ERRO PAGUEVELOZ  (%s)',$this->url), $request);*/
        }

        return $response;
	}
}