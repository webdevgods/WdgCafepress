<?php
namespace WdgCafepress\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use WdgCafepress\Options;

class ModuleOptions implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $config = $serviceLocator->get('Config');
        
        return new Options\ModuleOptions(isset($config['wdgcafepress']) ? $config['wdgcafepress'] : array());
    }
}