<?php
/**
 * Objeto referente a la tabla de base de datos 'modulo'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto Modulo y el intercambio de información con el hydrator.
 */
class Modulo
{

    private $mod_id;

    private $emp_id;

    private $mod_descripcion;

    function __construct()
    {}

    /**
     *
     * @return the $mod_id
     */
    public function getMod_id()
    {
        return $this->mod_id;
    }

    /**
     *
     * @return the $emp_id
     */
    public function getEmp_id()
    {
        return $this->emp_id;
    }

    /**
     *
     * @return the $mod_descripcion
     */
    public function getMod_descripcion()
    {
        return $this->mod_descripcion;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $mod_id
     */
    public function setMod_id($mod_id)
    {
        $this->mod_id = $mod_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $emp_id
     */
    public function setEmp_id($emp_id)
    {
        $this->emp_id = $emp_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $mod_descripcion
     */
    public function setMod_descripcion($mod_descripcion)
    {
        $this->mod_descripcion = $mod_descripcion;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->mod_id = (isset($data['mod_id'])) ? $data['mod_id'] : null;
        $this->emp_id = (isset($data['emp_id'])) ? $data['emp_id'] : null;
        $this->mod_descripcion = (isset($data['mod_descripcion'])) ? $data['mod_descripcion'] : null;
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