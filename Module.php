<?php
namespace WdgCafepress;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;

class Module 
{
    public function onBootstrap(MvcEvent $e)
    {
        $application         = $e->getApplication();
        $eventManager        = $application->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        
        $moduleRouteListener->attach($eventManager);
    }
    
    public function getConfig()
    {
        $config         = array();
        $configFiles    = array(
            'wdgcafepress.global.php.dist'
        );
        
        foreach ($configFiles as $configFile) 
        {
            $config = \Zend\Stdlib\ArrayUtils::merge($config, include __DIR__ . '/config/' . $configFile);
        }

        return $config;
    }
    
    /**
     * {@InheritDoc}
     */
    public function getServiceConfig()
    {
	$config         = array();
        $configFiles    = array(
            'service.config.php'
        );
        
        foreach ($configFiles as $configFile) 
        {
            $config = \Zend\Stdlib\ArrayUtils::merge($config, include __DIR__ . '/config/' . $configFile);
        }
        
        return $config;
    }
    
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
}