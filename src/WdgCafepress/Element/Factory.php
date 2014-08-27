<?php
namespace WdgCafepress\Element;

class Factory
{
    /**
     * @param \WdgCafepress\SimpleXMLElement $el
     * @return array
     * @throws \Exception
     */
    public function createSectionsCollection(\WdgCafepress\SimpleXMLElement $el)
    {
        if(!$el->xpath("//storeSections"))
        {
            throw new \Exception("No storeSections node in xml.");
        }
        
        $sectionsMapper = new \WdgCafepress\Mapper\StoreSections($el);
        $sectionsCollection = new \WdgCafepress\Element\Collection(array());
        
        foreach($sectionsMapper->getSections() as $section)
        {
            $sectionsCollection[] = $this->createSection(
                new \WdgCafepress\SimpleXmlElement($section->asXML())
            );
        }
        
        return $sectionsCollection;
    }
    
    /**
     * @param \WdgCafepress\SimpleXMLElement $el
     * @return array
     * @throws \Exception
     */
    public function createProductsCollection(\WdgCafepress\SimpleXMLElement $el)
    {
        if(!$el->xpath("//products"))
        {
            throw new \Exception("No products node in xml.");
        }
        
        $productsMapper = new \WdgCafepress\Mapper\Products($el);
        $productsCollection = new \WdgCafepress\Element\Collection(array());
        $products = $productsMapper->getProducts();
        
        /* @var $product \WdgCafepress\SimpleXmlElement */
        foreach($products as $product)
        {
            $productsCollection[] = $this->createProduct(
                new \WdgCafepress\SimpleXmlElement($product->asXML())
            );
        }
        
        return $productsCollection;
    }
    
    /**
     * @param \WdgCafepress\SimpleXMLElement $el
     * @return \WdgCafepress\Element\Section
     * @throws \Exception
     */
    public function createSection(\WdgCafepress\SimpleXMLElement $el)
    {
        if(!$el->xpath("//storeSection"))
        {
            throw new \Exception("No section node in xml.");
        }
        
        $section = new \WdgCafepress\Element\Section();        
        $mapper = new \WdgCafepress\Mapper\StoreSection($el);
        $hydrator = new \WdgCafepress\Hydrator\Section();
        
        $hydrator->hydrate($section, $mapper);
        
        return $section;
    }
    
    /**
     * @param \WdgCafepress\SimpleXMLElement $el
     * @return \WdgCafepress\Element\Product
     * @throws \Exception
     */
    public function createProduct(\WdgCafepress\SimpleXMLElement $el)
    {
        if(!$el->xpath("//product"))
        {
            throw new \Exception("No product node in xml.");
        }
        
        $product = new \WdgCafepress\Element\Product();        
        $mapper = new \WdgCafepress\Mapper\Product($el);
        $hydrator = new \WdgCafepress\Hydrator\Product();
        
        $hydrator->hydrate($product, $mapper);
        
        return $product;
    }
    
    /**
     * @param \WdgCafepress\SimpleXMLElement $el
     * @return \WdgCafepress\Element\Store
     * @throws \Exception
     */
    public function createStore(\WdgCafepress\SimpleXMLElement $el)
    {
        if(!$el->xpath("//store"))
        {
            throw new \Exception("No store node in xml.");
        }
        
        $store = new \WdgCafepress\Element\Store();        
        $mapper = new \WdgCafepress\Mapper\Store($el);
        
        $store->setId($mapper->getId());
        
        return $store;
    }
}