<?php

namespace Application\Clases;

use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\Navigation\Service\DefaultNavigationFactory;

class MyNavigation extends DefaultNavigationFactory
{
	protected function getPages(ServiceLocatorInterface $serviceLocator)
	{
		if (null === $this->pages) {
			
			//FETCH data from table menu :
			$fetchMenu = $serviceLocator->get('menu')->fetchAllPadres();
			
			$configuration = $this->formatTree($fetchMenu, 0);
			
			if (!isset($configuration['navigation'])) {
				throw new Exception\InvalidArgumentException('Could not find navigation configuration key');
			}
			if (!isset($configuration['navigation'][$this->getName()])) {
				throw new Exception\InvalidArgumentException(sprintf(
						'Failed to find a navigation container by the name "%s"',
						$this->getName()
				));
			}
			
			$application = $serviceLocator->get('Application');
			$routeMatch  = $application->getMvcEvent()->getRouteMatch();
			$router      = $application->getMvcEvent()->getRouter();
			$pages       = $this->getPagesFromConfig($configuration['navigation'][$this->getName()]);

			$this->pages = $this->injectComponents($pages, $routeMatch, $router);
		}
		return $this->pages;
	}
	

	function formatTree($tree, $parent){
        $configuration['navigation'][$this->getName()] = array();
        foreach($tree as $i => $item){
        	if($item['men_padre'] == $parent){
        		$explode = explode(':', $item['apl_descripcion']);
        		
        		$configuration['navigation'][$this->getName()][$item['men_nombre']] = array(
        				'label' => $item['men_icon'] . ':' .$item['men_etiqueta'] . ':' . $item['men_divisor'],
        				'route' => $explode[0],
        				'controller' => $explode[1],
        				'action' => $explode[2],
        				'pages' => 	$this->submenu($tree, $item['men_id']),
        		);
        	}
        }
        return $configuration;
    }
    
    function submenu($tree, $parent){
    	$arreglo = array();
    	$i=0;
    	foreach ($tree as $i => $item){
    		if($item['men_padre'] == $parent){
    			$explode = explode(':', $item['apl_descripcion']);
    		
    			$arreglo[] = array(
    					'label' => $item['men_icon'] . ':' .$item['men_etiqueta'] . ':' . $item['men_divisor'],
    					'route' => $explode[0],
    					'controller' => $explode[1],
    					'action' => $explode[2],
    					'pages' => 	$this->submenu($tree, $item['men_id'])
    			);
    		
    		}
    	}
    	return $arreglo;
    }
}