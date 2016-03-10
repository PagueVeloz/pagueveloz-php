<?php

namespace PagueVeloz;

use PagueVeloz\ObjectFactory;

abstract class AbstractDTO extends ObjectFactory
{
    public function getKeys()
    {
        return array_keys($this->toArray());
    }

    public function getRequest()
    {
        return json_encode($this->__request(ObjectFactory::toArray($this->getKeys())));
    }

    public function __request($array)
    {
        $response = [];

        foreach ($array as $key => $element) {
            if (is_array($element)) {
                $response[$key] = $this->__request($element);
            } elseif (!empty($element)) {
                $response[$key] = utf8_encode($element);
            }
        }

        return $response;
    }

    public function toArray()
    {
        return $this->_toArray();
    }

    private function _toArray()
    {
        $vars = get_object_vars($this);

        foreach ($vars as $key => $value) {
            if (is_object($value)) {
                $vars[$key] = method_exists($value, 'toArray') ? $value->toArray() : (array) $value;
            } elseif (is_array($value)) {
                $vars[$key] = $value;
            }
        }

        return $vars;
    }
}
