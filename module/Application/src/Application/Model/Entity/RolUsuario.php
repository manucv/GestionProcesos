<?php
/**
 * Objeto referente a la tabla de base de datos 'rol_usuario'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto RolUsuario y el intercambio de información con el hydrator.
 */
class RolUsuario
{

    private $usu_usuario;

    private $rol_id;

    function __construct()
    {}

    /**
     *
     * @return the $usu_usuario
     */
    public function getUsu_usuario()
    {
        return $this->usu_usuario;
    }

    /**
     *
     * @return the $rol_id
     */
    public function getRol_id()
    {
        return $this->rol_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $usu_usuario
     */
    public function setUsu_usuario($usu_usuario)
    {
        $this->usu_usuario = $usu_usuario;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $rol_id
     */
    public function setRol_id($rol_id)
    {
        $this->rol_id = $rol_id;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->usu_usuario = (isset($data['usu_usuario'])) ? $data['usu_usuario'] : null;
        $this->rol_id = (isset($data['rol_id'])) ? $data['rol_id'] : null;
    }

    /**
     * Obtiene los valores de los atributos de clase para poblar el hydrator.
     *
     * @return array
     */
    public function getArrayCopy()
    {
        return get_object_vars($this);
    }
}