<?php
namespace WdgCafepress\Mapper;

class Products extends Base
{
    /**
     * @return string
     */
    public function getProducts()
    {
        return $this->simpleXmlElement->getXPathArray("//products/product");
    }
}