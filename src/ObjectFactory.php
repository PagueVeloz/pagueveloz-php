<?php

namespace PagueVeloz;

abstract class ObjectFactory
{
	public function __set($atrib, $value)
    {
    	if (in_array($atrib, $this->getKeys()))
        	$this->$atrib = $value;
    }

    public function __get($atrib)
    {

        return $this->$atrib;
    }

    public function __isset($name)
    {
        return in_array($name, $this->getKeys());
    }

    public function getKeys()
    {
    	return array_keys($this->toArray());
    }

    public function toArray()
    {

    	return $this->_toArray();
    }

    private function _toArray()
    {
    	$vars = get_object_vars($this);

    	foreach ($vars as $key => $value)
    	{
    		if (is_object($value))
    		{
    			$vars[$key] = method_exists($value, 'toArray') ? $value->toArray() : (array)$value;
    		} else
    		if (is_array($value))
    			$vars[$key] = $value;
    	}

    	return $vars;
    }
}
