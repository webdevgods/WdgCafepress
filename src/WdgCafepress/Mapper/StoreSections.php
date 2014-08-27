<?php
namespace WdgCafepress\Mapper;

class StoreSections extends Base
{
    /**
     * @return string
     */
    public function getSections()
    {
        return $this->simpleXmlElement->getXPathArray("//storeSections/storeSection");
    }
}