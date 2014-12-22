<?php
/**
 * Objeto referente a la tabla de base de datos 'variable'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto Variable y el intercambio de información con el hydrator.
 */
class Variable
{

    private $var_id;

    private $var_responsable;

    private $var_descripcion;

    private $var_fecha_registro;

    function __construct()
    {}

    /**
     *
     * @return the $var_id
     */
    public function getVar_id()
    {
        return $this->var_id;
    }

    /**
     *
     * @return the $var_responsable
     */
    public function getVar_responsable()
    {
        return $this->var_responsable;
    }

    /**
     *
     * @return the $var_descripcion
     */
    public function getVar_descripcion()
    {
        return $this->var_descripcion;
    }

    /**
     *
     * @return the $var_fecha_registro
     */
    public function getVar_fecha_registro()
    {
        return $this->var_fecha_registro;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $var_id
     */
    public function setVar_id($var_id)
    {
        $this->var_id = $var_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $var_responsable
     */
    public function setVar_responsable($var_responsable)
    {
        $this->var_responsable = $var_responsable;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $var_descripcion
     */
    public function setVar_descripcion($var_descripcion)
    {
        $this->var_descripcion = $var_descripcion;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $var_fecha_registro
     */
    public function setVar_fecha_registro($var_fecha_registro)
    {
        $this->var_fecha_registro = $var_fecha_registro;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->var_id = (isset($data['var_id'])) ? $data['var_id'] : null;
        $this->var_responsable = (isset($data['var_responsable'])) ? $data['var_responsable'] : null;
        $this->var_descripcion = (isset($data['var_descripcion'])) ? $data['var_descripcion'] : null;
        $this->var_fecha_registro = (isset($data['var_fecha_registro'])) ? $data['var_fecha_registro'] : null;
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