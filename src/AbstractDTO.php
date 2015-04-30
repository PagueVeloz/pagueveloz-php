<?php

namespace PagueVeloz;

use \PagueVeloz\ObjectFactory;

abstract class AbstractDTO extends ObjectFactory
{

	public function getKeys()
    {
    	return array_keys($this->toArray());
    }

    public function getRequest()
    {
    	$request = array();
    	
    	foreach (ObjectFactory::toArray($this->getKeys()) as $key => $value) 
    	{
    		if (!empty($value))
    			$request[$key] = $value;
    	}
        
    	return json_encode($request);
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