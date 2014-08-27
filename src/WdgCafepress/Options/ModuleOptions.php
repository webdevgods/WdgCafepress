<?php
namespace WdgCafepress\Options;

use Zend\Stdlib\AbstractOptions;

class ModuleOptions extends AbstractOptions
{
    protected $apikey;
    protected $storeid;
    protected $baseurl;
    
    /**
     * @param string $apiKey
     * @return \WdgCafepress\Options\ModuleOptions
     */
    public function setApiKey($apiKey)
    {
        $this->apikey = $apiKey;
        
        return $this;
    }
    
    /**
     * @return string
     */
    public function getApiKey()
    {
        return $this->apikey;
    }
    
    /**
     * @param string $storeId
     * @return \WdgCafepress\Options\ModuleOptions
     */
    public function setStoreId($storeId)
    {
        $this->storeid = $storeId;
        
        return $this;
    }
    
    /**
     * @return string
     */
    public function getStoreId()
    {
        return $this->storeid;
    }
    
    /**
     * @param string $baseUrl
     * @return \WdgCafepress\Options\ModuleOptions
     */
    public function setBaseUrl($baseUrl)
    {
        $this->baseurl = $baseUrl;
        
        return $this;
    }
    
    /**
     * @return string
     */
    public function getBaseUrl()
    {
        return $this->baseurl;
    }
}