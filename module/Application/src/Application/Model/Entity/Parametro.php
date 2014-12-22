<?php
/**
 * Objeto referente a la tabla de base de datos 'parametro'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto Parametro y el intercambio de información con el hydrator.
 */
class Parametro
{

    private $par_descripcion_id;

    private $emp_id;

    private $par_valor;

    function __construct()
    {}

    /**
     *
     * @return the $par_descripcion_id
     */
    public function getPar_descripcion_id()
    {
        return $this->par_descripcion_id;
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
     * @return the $par_valor
     */
    public function getPar_valor()
    {
        return $this->par_valor;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $par_descripcion_id
     */
    public function setPar_descripcion_id($par_descripcion_id)
    {
        $this->par_descripcion_id = $par_descripcion_id;
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
     *            Ambigous <NULL, array> $par_valor
     */
    public function setPar_valor($par_valor)
    {
        $this->par_valor = $par_valor;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->par_descripcion_id = (isset($data['par_descripcion_id'])) ? $data['par_descripcion_id'] : null;
        $this->emp_id = (isset($data['emp_id'])) ? $data['emp_id'] : null;
        $this->par_valor = (isset($data['par_valor'])) ? $data['par_valor'] : null;
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