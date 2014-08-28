<?php
namespace WdgCafepress\Http;

class Response
{
    /**
     * @var \SimpleXMLElement
     */
    protected $simpleXMLElement;

    public function __construct($xml = null) {
        $this->simpleXMLElement = new \WdgCafepress\SimpleXmlElement($xml);
    }

    public function hasError() {
        //TODO - make this more robust, checking for error elements,
        // and help elements as well
        ;
    }
    
    public function getSimpleXmlElement()
    {
        return $this->simpleXMLElement;
    }

    public function getXML() {
        return $this->domDocument->saveXML();
    }

    public function setXML( $xml ) {
        $this->domDocument->loadXML( $xml );
        $this->simpleXMLElement = new \DOMXPath( $this->domDocument );
    }
}
