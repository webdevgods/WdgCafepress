<?php
namespace WdgCafepress\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use WdgCafepress\Options;
use WdgCafepress\Service as ServiceClass;

/**
 * WdgCafepress service factory
 */
class Service implements FactoryInterface 
{
    /**
     * Factory method for WdgCafepress service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return \WdgCafepress\Service\Cafepress
     */
    public function createService(ServiceLocatorInterface $serviceLocator) 
    {
        /* @var $options Options\ModuleOptions */
        $options = $serviceLocator->get('wdgcafepress_module_options');
        
        return new ServiceClass\Cafepress($options);
    }
}