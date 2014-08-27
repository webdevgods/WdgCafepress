<?php
namespace WdgCafepress\Service;

use WdgCafepress\Options\ModuleOptions;

class Cafepress
{
    protected $options;
    
    /**
     * @param \WdgCafepress\Options\ModuleOptions $options
     */
    public function __construct(ModuleOptions $options)
    {
        $this->options = $options;
    }


    /**
     * @param string $url_segment
     * @return resource
     */
    private function initCurl($url_segment)
    {
        $ch = curl_init();
        $header = array('Contect-Type:application/xml', 'Accept:application/xml');
        
        curl_setopt($ch, CURLOPT_URL, $this->options->getBaseUrl().$url_segment);  
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, '3');
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        
        return $ch;
    }
    
    /**
     * @param resource $ch
     * @return mixed
     * @throws \Exception
     */
    private function executeCurl($ch)
    {
        $response = curl_exec($ch);
        $response_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        switch ($response_code) {
            case 200:
                break;
            case 400:
                throw new \Exception("Bad request.");
            case 500:
                throw new \Exception("Server error.");
            case 401:
                throw new \Exception("Could not get Store Unauthorized");
            default:
                throw new \Exception("Unknown http status returned: $response_code");
         }
        return $response;
    }
    
    public function getStore()
    {
        $url_segment = 'store.findByStoreId.cp?v=3&appKey=%s&storeId=%s';        
        $ch = $this->initCurl(sprintf($url_segment, $this->options->getApiKey(), $this->options->getStoreId()));
        $xml = $this->executeCurl($ch);
        $response = new \WdgCafepress\Http\Response($xml);
        
        if($response->hasError())
        {
            throw new \Exception("Could not get Store.");
        }
        
        $factory = new \WdgCafepress\Element\Factory();
        
        return $factory->createStore($response->getSimpleXmlElement());
    }
    
    /**
     * @param string|int $section_id
     * @return \WdgCafepress\Element\Section
     * @throws \Exception
     */
    public function getStoreSection($section_id)
    {
        $url_segment = 'store.findByStoreSectionId.cp?v=3&appKey=%s&storeId=%s&storeSectionId=%s';        
        $ch = $this->initCurl(sprintf($url_segment, $this->options->getApiKey(), $this->options->getStoreId(), $section_id));
        $xml = $this->executeCurl($ch);
        $response = new \WdgCafepress\Http\Response($xml);
        
        if($response->hasError())
        {
            throw new \Exception("Could not get Store Section.");
        }
        
        $factory = new \WdgCafepress\Element\Factory();
        
        return $factory->createSection($response->getSimpleXmlElement());
    }
    
    /**
     * @return array
     * @throws \Exception
     */
    public function getStoreSections()
    {
        $url_segment = 'store.listStoreSections.cp?v=3&appKey=%s&storeId=%s';        
        $ch = $this->initCurl(sprintf($url_segment, $this->options->getApiKey(), $this->options->getStoreId()));
        $xml = $this->executeCurl($ch);

        $response = new \WdgCafepress\Http\Response($xml);
        
        if($response->hasError())
        {
            throw new \Exception("Could not get Store.");
        }
        
        $factory = new \WdgCafepress\Element\Factory();
        
        return $factory->createSectionsCollection($response->getSimpleXmlElement());
    }
    
    /**
     * @param int|string $section_id
     * @return array
     * @throws \Exception
     */
    public function getStoreSectionProducts($section_id)
    {
        $url_segment = 'product.listByStoreSection.cp?v=3&appKey=%s&storeId=%s&sectionId=%s';   
        $ch = $this->initCurl(sprintf($url_segment, $this->options->getApiKey(), $this->options->getStoreId(), $section_id));
        $xml = $this->executeCurl($ch);

        $response = new \WdgCafepress\Http\Response($xml);
        
        if($response->hasError())
        {
            throw new \Exception("Could not get Products from store.");
        }
        
        $factory = new \WdgCafepress\Element\Factory();
        
        return $factory->createProductsCollection($response->getSimpleXmlElement());
    }
}