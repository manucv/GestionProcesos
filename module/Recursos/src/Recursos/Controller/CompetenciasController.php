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
class CompetenciasController extends AbstractActionController
{

    /**
     * Almacena la clase para referencia
     * de base de datos y sobrecarga el tableGateway
     *
     * @return object|bool $competenciaDao
     */
    protected $competenciaDao;

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
                'padre' => 'competencias'
            )
        ));
        
        return array(
            'competencias' => $this->getCompetenciaDao()->traerTodos()
        );
    }

    /**
     * Obtiene el objeto registrado en el service manager
     * de la clase module (Application)
     *
     * @return object|bool
     */
    private function getCompetenciaDao()
    {
        if (! $this->competenciaDao) {
            $sm = $this->getServiceLocator();
            $this->competenciaDao = $sm->get('Recursos\Model\Dao\CompetenciaDao');
        }
        return $this->competenciaDao;
    }
}