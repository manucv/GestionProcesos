<?php
/**
 * Objeto referente a la tabla de base de datos 'usuario'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto Usuario y el intercambio de información con el hydrator.
 */
class Usuario
{

    private $usu_usuario;

    private $per_id;

    private $usu_nombre;

    private $usu_clave;

    private $usu_fecha_acceso;

    private $usu_estado;

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
     * @return the $per_id
     */
    public function getPer_id()
    {
        return $this->per_id;
    }

    /**
     *
     * @return the $usu_nombre
     */
    public function getUsu_nombre()
    {
        return $this->usu_nombre;
    }

    /**
     *
     * @return the $usu_clave
     */
    public function getUsu_clave()
    {
        return $this->usu_clave;
    }

    /**
     *
     * @return the $usu_fecha_acceso
     */
    public function getUsu_fecha_acceso()
    {
        return $this->usu_fecha_acceso;
    }

    /**
     *
     * @return the $usu_estado
     */
    public function getUsu_estado()
    {
        return $this->usu_estado;
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
     *            Ambigous <NULL, array> $per_id
     */
    public function setPer_id($per_id)
    {
        $this->per_id = $per_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $usu_nombre
     */
    public function setUsu_nombre($usu_nombre)
    {
        $this->usu_nombre = $usu_nombre;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $usu_clave
     */
    public function setUsu_clave($usu_clave)
    {
        $this->usu_clave = $usu_clave;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $usu_fecha_acceso
     */
    public function setUsu_fecha_acceso($usu_fecha_acceso)
    {
        $this->usu_fecha_acceso = $usu_fecha_acceso;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $usu_estado
     */
    public function setUsu_estado($usu_estado)
    {
        $this->usu_estado = $usu_estado;
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
        $this->per_id = (isset($data['per_id'])) ? $data['per_id'] : null;
        $this->usu_nombre = (isset($data['usu_nombre'])) ? $data['usu_nombre'] : null;
        $this->usu_clave = (isset($data['usu_clave'])) ? $data['usu_clave'] : null;
        $this->usu_fecha_acceso = (isset($data['usu_fecha_acceso'])) ? $data['usu_fecha_acceso'] : null;
        $this->usu_estado = (isset($data['usu_estado'])) ? $data['usu_estado'] : null;
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