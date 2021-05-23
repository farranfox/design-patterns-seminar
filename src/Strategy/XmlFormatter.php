<?php

namespace App\Strategy;

use SimpleXMLElement;

class XmlFormatter implements StrategyInterface
{
	public function format (array $data): string 
	{
        $xml = $this->addData($data, new SimpleXMLElement('<root/>'));

        return $xml->asXML();
    }

    protected function addData(array $data, SimpleXMLElement $xml) 
    {
        foreach ($data as $k => $v) {
            is_array($v)
                ? $this->addData($v, $xml->addChild($k))
                : $xml->addChild($k, $v);
        }

        return $xml;
    }
}
