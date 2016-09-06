<?php

namespace PagueVeloz\Service\Machine;

use PagueVeloz\Service\Context\HttpRequest;
use PagueVeloz\Service\Context\HttpResponse;

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
        $pos = strpos($this->request, "\r\n\r\n");
        $body = substr($this->request, $pos + 4);

        if ($this->proxy) {
            $pos = strpos($body, "\r\n\r\n");
            $body = substr($body, $pos);
        }

        return $body;
    }

    public function init(HttpRequest $request = null)
    {
        $init = curl_init();

        $opt = [];
        $opt[CURLOPT_URL] = trim($this->url);
        $opt[CURLOPT_CUSTOMREQUEST] = $this->method;
        $opt[CURLOPT_RETURNTRANSFER] = 1;
        $opt[CURLOPT_TIMEOUT] = 30;

        if (!empty($this->urlReferer)) {
            $opt[CURLOPT_REFERER] = $this->urlReferer;
        }

        if (!empty($request) && in_array($this->method, ['POST', 'PUT'])) {
            $opt[CURLOPT_POSTFIELDS] = $request->body;
        }

        if (!empty($this->headers)) {
            $opt[CURLOPT_HTTPHEADER] = $this->headers;
        }

        if ($this->proxy) {
            $opt[CURLOPT_PROXY] = '127.0.0.1:8888';
        }

        if ($this->ssl) {
            $opt[CURLOPT_SSL_VERIFYHOST] = 0;
            $opt[CURLOPT_SSL_VERIFYPEER] = 0;
        }

        curl_setopt_array($init, $opt);

        $this->request = curl_exec($init);

        $info = curl_getinfo($init);

        $response = new HttpResponse();
        $response->headers = $this->headers();
        $response->status = !empty($info['http_code']) ? $info['http_code'] : 204;
        $response->contentType = !empty($info['content_type']) ? $info['content_type'] : null;
        $response->body = $this->request;

        curl_close($init);
        return $response;
    }
}
