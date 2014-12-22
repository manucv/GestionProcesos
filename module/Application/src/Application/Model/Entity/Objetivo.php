<?php
/**
 * Objeto referente a la tabla de base de datos 'objetivo'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto Objetivo y el intercambio de información con el hydrator.
 */
class Objetivo
{

    private $obj_id;

    private $est_id;

    private $obj_descripcion;

    function __construct()
    {}

    /**
     *
     * @return the $obj_id
     */
    public function getObj_id()
    {
        return $this->obj_id;
    }

    /**
     *
     * @return the $est_id
     */
    public function getEst_id()
    {
        return $this->est_id;
    }

    /**
     *
     * @return the $obj_descripcion
     */
    public function getObj_descripcion()
    {
        return $this->obj_descripcion;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $obj_id
     */
    public function setObj_id($obj_id)
    {
        $this->obj_id = $obj_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $est_id
     */
    public function setEst_id($est_id)
    {
        $this->est_id = $est_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $obj_descripcion
     */
    public function setObj_descripcion($obj_descripcion)
    {
        $this->obj_descripcion = $obj_descripcion;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->obj_id = (isset($data['obj_id'])) ? $data['obj_id'] : null;
        $this->est_id = (isset($data['est_id'])) ? $data['est_id'] : null;
        $this->obj_descripcion = (isset($data['obj_descripcion'])) ? $data['obj_descripcion'] : null;
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