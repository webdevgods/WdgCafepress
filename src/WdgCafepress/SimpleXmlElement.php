<?php
namespace WdgCafepress;

class SimpleXmlElement extends \SimpleXMLElement
{
    public function getXPathArray($path)
    {
        return (array) $array = $this->xpath($path);
    }
    
    public function getXPathValue($path)
    {
        $array = $this->xpath($path);
        
        if(isset($array[0]))
        {
            return (string) $array[0];
        }
        
        return null;
    }
}