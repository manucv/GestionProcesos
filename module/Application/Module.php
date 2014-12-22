<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */
namespace Application;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\Validator\AbstractValidator;
use Application\Controller\LoginController;
use Application\Permissions\AclListener;
use Application\Clases\Login;
use Application\Model\Entity\Usuario;
use Application\Model\Dao\UsuarioDao;
use Application\Model\Entity\RolUsuario;
use Application\Model\Dao\RolUsuarioDao;
use Application\Model\Entity\Departamento;
use Application\Model\Dao\DepartamentoDao;
use Application\Model\Entity\Cargo;
use Application\Model\Dao\CargoDao;
use Application\Model\Entity\Competencia;
use Application\Model\Dao\CompetenciasDao;
use Application\Model\Entity\Personal;
use Application\Model\Dao\PersonalDao;
use Application\Model\Entity\Experiencia;
use Application\Model\Dao\ExperienciaDao;
use Application\Model\Entity\Idioma;
use Application\Model\Dao\IdiomaDao;
use Application\Model\Entity\Grados;
use Application\Model\Dao\GradoDao;

/**
 * Definición de la clase moduel.
 *
 * Permite definir el login de acceso al sistema.
 * Permite la validaciones de acceso al sistema según la autetificación de usuario y clave.
 * Agrega el traductor (translate) definido para el sistema.
 * Agrega las definiciones de las capas dao y entity al service manager.
 */
class Module
{

    /**
     * Ejecuta los eventos en el módulo y en los diferentes módulos.
     * Configuración inicial modular.
     * Assumes Zend\Mvc\MvcEvent:
     *
     * @param MvcEvent $e            
     * @return void
     */
    public function onBootstrap(MvcEvent $e)
    {
        
        // AYUDA A QUE SE VALIDEN LOS ERRORES DEL FORMULARIO
        $translator = $e->getApplication()
            ->getServiceManager()
            ->get('translator');
        AbstractValidator::setDefaultTranslator($translator);
        
        $eventManager = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
        
        $app = $e->getParam('application');
        $app->getEventManager()->attach('dispatch', array(
            $this,
            'initAuth'
        ), 100);
        
        /*
         * $aclListener = new AclListener();
         * $aclListener->attach($eventManager);
         */
        
        $eventManager->getSharedManager()->attach('Zend\Mvc\Controller\AbstractActionController', 'dispatch', function ($e)
        {
            $controller = $e->getTarget();
            $controllerClass = get_class($controller);
            $moduleNamespace = substr($controllerClass, 0, strpos($controllerClass, '\\'));
            $config = $e->getApplication()
                ->getServiceManager()
                ->get('config');
            if (isset($config['module_layouts'][$moduleNamespace])) {
                $controller->layout($config['module_layouts'][$moduleNamespace]);
            }
        }, 100);
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
    }

    /**
     * Agrega el archivo de configuración del módulo.
     *
     * @return string 'name of file'
     */
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    /**
     * Agrega las rutas de configuración de carga automática del módulo.
     *
     * @return array
     */
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__
                )
            )
        );
    }

    /**
     * Autentificación de usuario en el sistema
     * Assumes Zend\Mvc\MvcEvent:
     *
     * @param MvcEvent $e            
     * @return void
     */
    public function initAuth(MvcEvent $e)
    {
        $application = $e->getApplication();
        $matches = $e->getRouteMatch();
        $controller = $matches->getParam('controller');
        $action = $matches->getParam('action');
        
        if (0 === strpos($controller, __NAMESPACE__, 0)) {
            switch ($controller) {
                case 'Application\Controller\Login':
                    if (in_array($action, array(
                        'index',
                        'autenticar'
                    ))) {
                        return;
                    }
                    break;
                
                case 'Application\Controller\Error':
                    return;
                    break;
            }
        }
        
        // $sm = $application->getServiceManager();
        // $auth = $sm->get('Application\Clases\Login');
        
        /*
         * if($controller != 'Api\Controller\Api' ){
         * if(!$auth->isLoggedIn()){
         * $matches->setParam('controller', 'Application\Controller\Login');
         * $matches->setParam('action', 'index');
         * }
         * }
         */
    }

    /**
     * Configura los servicios y los agrega dentro del service manager.
     * Los servicios son configurados mediante factories, invokables o inicializadores.
     *
     * @return class
     */
    public function getServiceConfig()
    {
        return array(
            'factories' => array(
                'Application\Clases\Login' => function ($sm)
                {
                    $config = $sm->get('config');
                    $db_auth = new \Zend\Db\Adapter\Adapter($config['db']);
                    return new Login($db_auth);
                },
                
                'Application\Permissions\AclListener' => function ($sm)
                {
                    $config = $sm->get('config');
                    $db_auth = new \Zend\Db\Adapter\Adapter($config['db']);
                    return new AclListener($db_auth);
                },
                
                'Application\Model\Dao\UsuarioDao' => function ($sm)
                {
                    $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
                    $resultSetPrototype = new ResultSet();
                    $resultSetPrototype->setArrayObjectPrototype(new Usuario());
                    $tableGateway = new TableGateway('usuario', $dbAdapter, null, $resultSetPrototype);
                    return new UsuarioDao($tableGateway);
                },
                
                'Application\Model\Dao\RolUsuarioDao' => function ($sm)
                {
                    $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
                    $resultSetPrototype = new ResultSet();
                    $resultSetPrototype->setArrayObjectPrototype(new RolUsuario());
                    $tableGateway = new TableGateway('rol_usuario', $dbAdapter, null, $resultSetPrototype);
                    return new RolUsuarioDao($tableGateway);
                },
                
                'Recursos\Model\Dao\DepartamentoDao' => function ($sm)
                {
                    $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
                    $resultSetPrototype = new ResultSet();
                    $resultSetPrototype->setArrayObjectPrototype(new Departamento());
                    $tableGateway = new TableGateway('departamento', $dbAdapter, null, $resultSetPrototype);
                    return new DepartamentoDao($tableGateway);
                },
                
                'Recursos\Model\Dao\CargoDao' => function ($sm)
                {
                    $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
                    $resultSetPrototype = new ResultSet();
                    $resultSetPrototype->setArrayObjectPrototype(new Cargo());
                    $tableGateway = new TableGateway('cargo', $dbAdapter, null, $resultSetPrototype);
                    return new CargoDao($tableGateway);
                },
                
                'Recursos\Model\Dao\CompetenciaDao' => function ($sm)
                {
                    $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
                    $resultSetPrototype = new ResultSet();
                    $resultSetPrototype->setArrayObjectPrototype(new Competencia());
                    $tableGateway = new TableGateway('competencia', $dbAdapter, null, $resultSetPrototype);
                    return new CompetenciasDao($tableGateway);
                },
                
                'Recursos\Model\Dao\PersonalDao' => function ($sm)
                {
                    $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
                    $resultSetPrototype = new ResultSet();
                    $resultSetPrototype->setArrayObjectPrototype(new Personal());
                    $tableGateway = new TableGateway('personal', $dbAdapter, null, $resultSetPrototype);
                    return new PersonalDao($tableGateway);
                },
                
                'Recursos\Model\Dao\ExperienciaDao' => function ($sm)
                {
                    $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
                    $resultSetPrototype = new ResultSet();
                    $resultSetPrototype->setArrayObjectPrototype(new Experiencia());
                    $tableGateway = new TableGateway('experiencia', $dbAdapter, null, $resultSetPrototype);
                    return new ExperienciaDao($tableGateway);
                },
                
                'Recursos\Model\Dao\IdiomaDao' => function ($sm)
                {
                    $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
                    $resultSetPrototype = new ResultSet();
                    $resultSetPrototype->setArrayObjectPrototype(new Idioma());
                    $tableGateway = new TableGateway('idioma', $dbAdapter, null, $resultSetPrototype);
                    return new IdiomaDao($tableGateway);
                },
                
                'Recursos\Model\Dao\GradoDao' => function ($sm)
                {
                    $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
                    $resultSetPrototype = new ResultSet();
                    $resultSetPrototype->setArrayObjectPrototype(new Grados());
                    $tableGateway = new TableGateway('grados', $dbAdapter, null, $resultSetPrototype);
                    return new GradoDao($tableGateway);
                }
            )
        );
        // 'Navigation' => 'Application\Clases\MyNavigationFactory'
        
        /*
         * 'initializers' => array(
         * function ($instance, $sm) {
         * if ($instance instanceof \Zend\Db\Adapter\AdapterAwareInterface) {
         * $instance->setDbAdapter($sm->get('Zend\Db\Adapter\Adapter'));
         * }
         * }
         * ),
         * 'invokables' => array(
         * 'menu' => 'Application\Model\Dao\MenuTable'
         * ),
         */
    }

    /**
     * Configura los controladores con métodos de factories o invokables.
     *
     * @return array
     */
    public function getControllerConfig()
    {
        return array(
            'factories' => array(
                'Application\Controller\Login' => function ($sm)
                {
                    $controller = new LoginController();
                    $locator = $sm->getServiceLocator();
                    $controller->setLogin($locator->get('Application\Clases\Login'));
                    return $controller;
                }
            )
        );
    }
}
