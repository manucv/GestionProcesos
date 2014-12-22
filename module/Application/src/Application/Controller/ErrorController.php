<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ErrorController extends AbstractActionController {
	public function indexAction() {
		return $this->forward ()->dispatch ( 'Application\Controller\Error', array (
				'action' => 'denied' 
		) );
	}
	public function deniedAction() {
		$isLoged = false;
		if (isset ( $_SESSION ['Zend_Auth'] )) {
			$usuario = $_SESSION ['Zend_Auth'] ['storage']->usu_usuario;
			if ($usuario) {
				$this->layout ( 'layout/layout' );
				$isLoged = true;
			} else {
				$isLoged = false;
			}
		}
		
		return new ViewModel ( array (
				'mensaje' => 'Acceso Denegado',
				'estaLogeado' => $isLoged 
		) );
	}
}