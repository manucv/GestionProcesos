<?php
namespace Application\Form;

use Zend\InputFilter\InputFilter;
use Zend\InputFilter\Input;

class LoginValidator extends InputFilter{
	
	function __construct(){
		
		$usuario = new Input('usu_usuario');
		$usuario->setRequired(true);
		$this->add($usuario);
		
		$usuario = new Input('usu_clave');
		$usuario->setRequired(true);
		$this->add($usuario);

		/*$this->add(array(
			'name'=>'usu_usuario',
			'required'=>true,
			'options'=>array(
				'messages'=>array(
					\Zend\Validator\NotEmpty::IS_EMPTY => 'Ingrese su nombre de usuario.',
				)
			)
		));*/
	}
	
}