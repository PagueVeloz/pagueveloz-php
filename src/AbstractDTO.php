<?php

namespace PagueVeloz;

abstract class AbstractDTO extends ObjectFactory
{
    /**
     * Convert object to stdClass.
     *
     * @return stdClass
     */
    public function getRequest()
    {
        return json_encode($this->__request(ObjectFactory::toArray($this->getKeys())));
    }

    /**
     * Method runner of getRequest().
     *
     * @return array
     */
    protected function __request($array)
    {
        $response = [];
        foreach ($array as $key => $element) {
            if (is_array($element)) {
                if ($child = $this->__request($element)) {
                    $response[$key] = $child;
                }
            } elseif (is_object($element)) {
                $response[$key] = $element->toArray();
            } elseif (!empty($element)) {
                $response[$key] = utf8_encode($element);
            }
        }

        return $response;
    }
}
