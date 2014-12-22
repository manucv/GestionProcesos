<?php
/**
 * Clase controladora del modelo y la vista asociada.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Recursos\Controller;

/**
 * Importación de librerías
 */
use Zend\Mvc\Controller\AbstractActionController;

/**
 * Define el objeto que permite la interacción
 * entre el modelo y la vista asociadas.
 *
 * Contiene funciones específicas para el funcionamiento
 * adecuado de la clase controladora.
 */
class IndexController extends AbstractActionController
{

    /**
     * Action: Inicial
     *
     * @return array
     */
    public function indexAction()
    {
        // Registra la ruta de navegacion del usuario en el layout
        $this->layout()->setVariables(array(
            'ruta' => array(
                'modulo' => 'recursos',
            )
        ));
        
        return array();
    }
}
