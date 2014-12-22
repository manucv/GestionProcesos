<?php
/**
 * Acciones de login de acceso.
 *
 * @author    Emanuel Carrasco 
 * @copyright 
 * @license   
 */
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Clases\Login as LoginService;
use Application\Form\Login;
use Application\Form\LoginValidator;

/**
 * Controlador de login de acceso.
 *
 * Permite identificar todas las acciones del usuario sobre el sistema al momento de ingresar a la aplicación
 * Si el ingreso es exitoso redirige al módulo inicial del sistema.
 *
 * @abstract ActionController
 */
class LoginController extends AbstractActionController
{

    /**
     * Objeto de la clase Login.
     * Assume Application\Clases\Login:
     *
     * @var Login $login
     */
    private $login;

    /**
     * Almacena el objeto del usuario validado.
     * Obtiene el rol en este objeto.
     *
     * @var object $rolUsuarioDao
     */
    protected $rolUsuarioDao;

    /**
     * Almacena el objeto del usuario con credenciales válidas.
     *
     * @var object $usuarioDao
     */
    protected $usuarioDao;

    /**
     * Función para ingresar a la página de login.
     * Carga el formulario de ingreso al sistema. Verifica si el usuario ya está logueado para redirigirlo al sistema.
     *
     * @return array
     * @category Action
     */
    public function indexAction()
    {
        // Formulario de login.
        $form = new Login('login');
        // Trae el estado de logueo.
        $loggedIn = $this->login->isLoggedIn();
        
        // Si el usuario está logueado, se redirige al módulo inicial del sistema.
        if ($loggedIn) {
            return $this->redirect()->toRoute('usuarios', array(
                'controller' => 'index',
                'action' => 'index'
            ));
        }
        
        return array(
            'form' => $form
        );
    }

    /**
     * Autenticación de datos.
     * Validar post del formulario.
     *
     * @return ViewModel
     * @category Action
     */
    public function autenticarAction()
    {
        // Valida que se haya hecho el post de información desde el formulario.
        if (! $this->request->isPost()) {
            $this->redirect()->toRoute('application', array(
                'controller' => 'login'
            ));
        }
        
        // Formulario de ingreso.
        $form = new Login('login');
        // Agregar validadores al formulario.
        $form->setInputFilter(new LoginValidator());
        
        // Obtener los datos enviados del formulario.
        $data = $this->request->getPost();
        // Cargar los campos del formulario con la información enviada.
        $form->setData($data);
        
        // Validación del formulario
        if (! $form->isValid()) {
            $modelView = new ViewModel(array(
                'form' => $form
            ));
            $modelView->setTemplate('application/login/index');
            return $modelView;
        }
        // Obtenener los valores del formulario (también funciona con $data)
        $values = $form->getData();
        // Se almacena el usuario enviado.
        $usuario = $values['usu_usuario'];
        // Se almacena la clave enviada.
        $clave = $values['usu_clave'];
        
        try {
            // Actualización de mensajes de errores en la clase login.
            $this->login->setMessage('El nombre de usuario o la contrase&ntilde;a son incorrectas.', LoginService::NOT_IDENTITY);
            $this->login->setMessage('La contrase&ntilde;a ingresada no es correcta. Intentelo de nuevo', LoginService::INVALID_CREDENTIAL);
            $this->login->setMessage('Los campos de usuario y contrase&ntilde;a no pueden dejarse en blanco.', LoginService::INVALID_LOGIN);
            $this->login->setMessage('Usuario inactivo. Comun&iacute;quese con el administrador', LoginService::USER_INACTIVE);
            
            // Valida las credenciales enviadas encriptando previamente la clave.
            $this->login->login($usuario, $this->secret($clave));
            // Obtiene la información del usuario
            $objetoUsuario = $this->getUsuarioDao()->traerPorUsuarioClave($usuario, $clave);
            
            // Obtiene la información del rol del usuario
            $rolUsuarioObjeto = $this->getRolUsuarioDao()->rolPorCodigo($objetoUsuario->getUsu_usuario());
            
            // Valida que la información sea parte del objeto.
            if (is_object($rolUsuarioObjeto)) {
                
                // Se almacena el rol en el contenedor de sesión.
                $role = $rolUsuarioObjeto->getRol_id();
                $this->login->getIdentity()->rol_id = $role;
            } else {
                
                // Si el usuario no tiene permiso el acceso es denegado
                return $this->redirect()->toRoute('application', array(
                    'controller' => 'login',
                    'action' => 'denied'
                ));
            }
            
            // Si los datos son correctos y tiene permiso se redirecciona a la página inicial.
            return $this->redirect()->toRoute('usuarios', array(
                'controller' => 'index',
                'action' => 'index'
            ));
            
            // Si se produce algún error en las credenciales enviadas en el post salta el mensaje de error.
        } catch (\Exception $e) {
            
            // Coloca el error en el layout del formulario de ingreso.
            $this->layout()->mensaje = $e->getMessage();
            
            // Retorna view model con el formulario.
            $viewModel = new ViewModel(array(
                'form' => new Login('login')
            ));
            
            // Adiciona el template referenciado
            $viewModel->setTemplate('application/login/index');
            
            return $viewModel;
        }
    }

    /**
     * Obtiene el login del sistema y lo carga en el controlador.
     * Assumes Application\Clases\Login:
     *
     * @param LoginService $login            
     * @return void
     */
    public function setLogin(LoginService $login)
    {
        $this->login = $login;
    }

    /**
     * Salida del sistema.
     * Destruye datos de sesión y redirige a la vista adecuada.
     *
     * @return ViewModel
     * @category Action
     */
    public function logoutAction()
    {
        // Destruye datos y sesiones.
        $this->login->logout();
        session_unset();
        session_destroy();
        
        // Redirección
        return $this->redirect()->toRoute('application', array(
            'controller' => 'login',
            'action' => 'index'
        ));
    }

    /**
     * Acceso denegado
     *
     * @return ViewModel
     */
    public function deniedAction()
    {
        // Destruye datos y sesiones.
        $this->login->logout();
        session_unset();
        session_destroy();
        
        // Redirección
        return $this->redirect()->toRoute('application', array(
            'controller' => 'error',
            'action' => 'denied'
        ));
    }

    /**
     * Encriptación de contraseña
     *
     * @param string $password            
     * @return string
     */
    public function secret($password)
    {
        /* Aqui va la llamada a la librer�a de validaci�n de contrase�as de Azul */
        return md5($password);
        // $eclave='';
        // for ($i = 0; $i < strlen($password); $i++) {
        // $c=(ord(strtoupper($password[$i])));
        // $eclave.=$c.'%';
        // }
        // return ($eclave);
    }

    /**
     * Obtener dao rol usuario del service manager.
     *
     * @return object
     */
    public function getRolUsuarioDao()
    {
        if (! $this->rolUsuarioDao) {
            $sm = $this->getServiceLocator();
            $this->rolUsuarioDao = $sm->get('Application\Model\Dao\RolUsuarioDao');
        }
        return $this->rolUsuarioDao;
    }

    /**
     * Obtener dao usuario del service manager.
     *
     * @return object
     */
    public function getUsuarioDao()
    {
        if (! $this->usuarioDao) {
            $sm = $this->getServiceLocator();
            $this->usuarioDao = $sm->get('Application\Model\Dao\UsuarioDao');
        }
        return $this->usuarioDao;
    }
}