<?php
namespace WdgCafepress\Mapper;

class Base
{
    /**
     * @var \WdgCafepress\SimpleXMLElement
     */
    public $simpleXmlElement;
    
    /**
     * @param \SimpleXMLElement $simpleXmlElement
     */
    public function __construct(\WdgCafepress\SimpleXMLElement $simpleXmlElement) 
    {
        $this->simpleXmlElement = $simpleXmlElement;
    }
 
    /**
     * @return \WdgCafepress\SimpleXMLElement
     */
    public function getSimpleXmlElement()
    {
        return $this->simpleXmlElement;
    }
}