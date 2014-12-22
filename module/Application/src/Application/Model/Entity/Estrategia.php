<?php
/**
 * Objeto referente a la tabla de base de datos 'estrategia'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto Estrategia y el intercambio de información con el hydrator.
 */
class Estrategia
{

    private $est_id;

    private $emp_id;

    private $est_descripcion;

    function __construct()
    {}

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
     * @return the $emp_id
     */
    public function getEmp_id()
    {
        return $this->emp_id;
    }

    /**
     *
     * @return the $est_descripcion
     */
    public function getEst_descripcion()
    {
        return $this->est_descripcion;
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
     *            Ambigous <NULL, array> $emp_id
     */
    public function setEmp_id($emp_id)
    {
        $this->emp_id = $emp_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $est_descripcion
     */
    public function setEst_descripcion($est_descripcion)
    {
        $this->est_descripcion = $est_descripcion;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->est_id = (isset($data['est_id'])) ? $data['est_id'] : null;
        $this->emp_id = (isset($data['emp_id'])) ? $data['emp_id'] : null;
        $this->est_descripcion = (isset($data['est_descripcion'])) ? $data['est_descripcion'] : null;
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