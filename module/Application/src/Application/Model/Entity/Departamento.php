<?php
/**
 * Objeto referente a la tabla de base de datos 'departamento'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto Departamento y el intercambio de información con el hydrator.
 */
class Departamento
{

    private $dep_id;

    private $dep_descripcion;

    function __construct()
    {}

    /**
     *
     * @return the $dep_id
     */
    public function getDep_id()
    {
        return $this->dep_id;
    }

    /**
     *
     * @return the $dep_descripcion
     */
    public function getDep_descripcion()
    {
        return $this->dep_descripcion;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $dep_id
     */
    public function setDep_id($dep_id)
    {
        $this->dep_id = $dep_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $dep_descripcion
     */
    public function setDep_descripcion($dep_descripcion)
    {
        $this->dep_descripcion = $dep_descripcion;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->dep_id = (isset($data['dep_id'])) ? $data['dep_id'] : null;
        $this->dep_descripcion = (isset($data['dep_descripcion'])) ? $data['dep_descripcion'] : null;
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