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
            if (is_array($element) || is_object($element)) {
                if ($child = $this->__request($element)) {
                    $response[$key] = $child;
                }
            } elseif (strlen($element) > 0) {
                $response[$key] = $this->isUTF8($element) ? $element : utf8_encode($element);
            }
        }

        return $response;
    }

    public function isUTF8($string)
    {
        return mb_detect_encoding($string.'x', 'UTF-8, ISO-8859-1') == 'UTF-8';
    }
}
