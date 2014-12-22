<?php
/**
 * Verificación de identidad en el sistema y mensajes de acceso exitoso o fallido.
 *
 * @author    Andrés Guzman - Formación BDI / Emanuel Carrasco 
 * @copyright 
 * @license   
 */
namespace Application\Clases;

use Zend\Authentication\AuthenticationService;
use Zend\Authentication\Adapter\DbTable as AuthAdapter;
use Zend\Authentication\Result;

/**
 * Clase para el login de usuario al sistema.
 *
 * Obtiene la identidad de un usuario y genera la eliminación de sesión de una identidad validada.
 * Define los mensajes de acceso al sistema y la actualización de los mismos.
 */
class Login
{

    /**
     * Autenticación de Servicio.
     * Assumes Zend\Authentication\AuthenticationService:
     *
     * @var AuthenticationService $auth
     */
    private $auth;

    /**
     * Adaptador de autenticación.
     * Assumes \Zend\Authentication\Adapter\DbTable:
     *
     * @var DbTable $authAdapter
     */
    private $authAdapter;

    /**
     * Adaptador de base de datos.
     * Existente en el Service Manager.
     * Assumes \Zend\Db\Adapter\Adapter:
     *
     * @var Adapter $dbAdapter
     */
    private $dbAdapter;

    /**
     * Mensaje de autenticación fallida.
     *
     * @var CONSTANT string NOT_IDENTITY
     */
    const NOT_IDENTITY = 'notIdentity';

    /**
     * Mensaje de autenticación fallida.
     *
     * @var CONSTANT string INVALID_CREDENTIAL
     */
    const INVALID_CREDENTIAL = 'invalidCredential';

    /**
     * Mensaje de usuario fallido.
     *
     * @var CONSTANT string INVALID_USER
     */
    const INVALID_USER = 'invalidUser';

    /**
     * Mensaje de clave fallida.
     *
     * @var CONSTANT string INVALID_LOGIN
     */
    const INVALID_LOGIN = 'invalidLogin';

    /**
     * Mensaje de usuario inactivo.
     *
     * @var CONSTANT string USER_INACTIVE
     */
    const USER_INACTIVE = 'inactive';

    /**
     * Mensajes de validaciones por defecto
     *
     * @var array
     */
    protected $messages = array(
        self::NOT_IDENTITY => "Not existent identity. A record with the supplied identity could not be found.",
        self::INVALID_CREDENTIAL => "Invalid credential. Supplied credential is invalid.",
        self::INVALID_USER => "Invalid User. Supplied credential is invalid",
        self::INVALID_LOGIN => "Invalid Login. Fields are empty",
        self::USER_INACTIVE => "The user is inactive."
    );

    /**
     * Constructor de la clase.
     * Carga el adaptador en la clase y genera la autenticación del servicio.
     * Assumes \Zend\Db\Adapter\Adapter:
     *
     * @param Adapter $dbAdapter            
     * @return void
     */
    public function __construct($dbAdapter)
    {
        $this->dbAdapter = $dbAdapter;
        $this->auth = new AuthenticationService();
    }

    /**
     * Función para la validación del login del usuario
     * Retorna los mensajes de error o escribe los datos validos en el contenedor.
     *
     * @param string $username            
     * @param string $password            
     * @return UserModel
     * @throws Login [FAILURE_IDENTITY_NOT_FOUND] [FAILURE_CREDENTIAL_INVALID] [INVALID_LOGIN] [INVALID_USER]
     */
    public function login($username, $password)
    {
        /**
         * Identity para el login.
         *
         * @var string $identity
         * @return exception|this
         */
        $identity = null;
        
        // Verifica si el $username es un email valido.
        if (filter_var($username, FILTER_VALIDATE_EMAIL)) {
            $identity = 'usu_usuario';
        } else {
            $identity = 'usu_usuario';
        }
        
        // Carga el adaptador de identificación con los parámetros entregados
        $this->authAdapter = new AuthAdapter($this->dbAdapter, 'usuario', $identity, 'usu_clave');
        
        // Se obtiene el query a ejecutarse sobre la base de datos.
        $select = $this->authAdapter->getDbSelect();
        // *@todo $select->where('usu_estado = 1');
        
        // Se valida que el nombre de usuario y la clave no estén vacías.
        if (! empty($username) && ! empty($password)) {
            
            // Carga el identity y la credencial con el usuario y la clave.
            $this->authAdapter->setIdentity($username);
            $this->authAdapter->setCredential($password);
            
            // Se obtiene el resultado de autenticación de la base de datos.
            $result = $this->auth->authenticate($this->authAdapter);
            
            switch ($result->getCode()) {
                
                case Result::FAILURE_IDENTITY_NOT_FOUND:
                    
                    // Resolves to Application\Clases\Exception
                    throw new \Exception($this->messages[self::NOT_IDENTITY]);
                    break;
                
                case Result::FAILURE_CREDENTIAL_INVALID:
                    
                    // Resolves to Application\Clases\Exception
                    throw new \Exception($this->messages[self::INVALID_CREDENTIAL]);
                    break;
                
                case Result::SUCCESS:
                    
                    // Se validad que sea exitosa la autenticación del usuario.
                    if ($result->isValid()) {
                        
                        // Se almacena la información en el contenedor de sesión.
                        $data = $this->authAdapter->getResultRowObject();
                        $this->auth->getStorage()->write($data);
                    } else {
                        // Resolves to Application\Clases\Exception
                        throw new \Exception($this->messages[self::INVALID_USER]);
                    }
                    break;
                
                default:
                    // Resolves to Application\Clases\Exception
                    throw new \Exception($this->messages[self::INVALID_LOGIN]);
                    break;
            }
        } else {
            // Resolves to Application\Clases\Exception
            throw new \Exception($this->messages[self::INVALID_LOGIN]);
        }
        return $this;
    }

    /**
     * Salir del sistema.
     * Borra la información del contenedor de sesión.
     *
     * @return UserModel
     */
    public function logout()
    {
        $this->auth->clearIdentity();
        return $this;
    }

    /**
     * Retorna la información del usuario logueado
     *
     * @return mixed|null
     */
    public function getIdentity()
    {
        if ($this->auth->hasIdentity()) {
            return $this->auth->getIdentity();
        }
        return null;
    }

    /**
     * Verifica si un usuario está logueado en el sistema.
     *
     * @return bool
     */
    public function isLoggedIn()
    {
        return $this->auth->hasIdentity();
    }

    /**
     * Actualiza el arreglo de mensajes con un un mensaje en particular.
     *
     * @param string $messageString            
     * @param string $messageKey
     *            OPTIONAL
     * @return UserModel
     * @throws Exception
     */
    public function setMessage($messageString, $messageKey = null)
    {
        if ($messageKey === null) {
            $keys = array_keys($this->messages);
            $messageKey = current($keys);
        }
        if (! isset($this->messages[$messageKey])) {
            // Resolves to Application\Clases\Exception
            throw new \Exception("No message exists for key '$messageKey'");
        }
        $this->messages[$messageKey] = $messageString;
        return $this;
    }

    /**
     * Actualiza el arreglo de mensajes con nuevos mensajes.
     *
     * @param array $messages            
     * @return UserModel
     */
    public function setMessages(array $messages)
    {
        foreach ($messages as $key => $message) {
            $this->setMessage($message, $key);
        }
        return $this;
    }
}