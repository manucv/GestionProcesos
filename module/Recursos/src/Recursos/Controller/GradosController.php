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
class GradosController extends AbstractActionController
{

    /**
     * Almacena la clase para referencia
     * de base de datos y sobrecarga el tableGateway
     *
     * @return object|bool $departamentoDao
     */
    protected $gradosDao;

    /**
     * Action: Inicial
     *
     * @return array
     */
    public function indexAction()
    {
        return array();
    }

    /**
     * Action: Muestra el total de registros del objeto
     *
     * @return array
     */
    public function listadoAction()
    {
        // Registra la ruta de navegacion del usuario en el layout
        $this->layout()->setVariables(array(
            'ruta' => array(
                'modulo' => 'recursos',
                'padre' => 'grados'
            )
        ));
        
        return array(
            'grados' => $this->getGradosDao()->traerTodos()
        );
    }

    /**
     * Obtiene el objeto registrado en el service manager
     * de la clase module (Application)
     *
     * @return object|bool
     */
    private function getGradosDao()
    {
        if (! $this->gradosDao) {
            $sm = $this->getServiceLocator();
            $this->gradosDao = $sm->get('Recursos\Model\Dao\GradoDao');
        }
        return $this->gradosDao;
    }
}
