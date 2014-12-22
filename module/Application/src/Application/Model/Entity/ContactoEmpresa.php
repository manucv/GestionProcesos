<?php
/**
 * Objeto referente a la tabla de base de datos 'contacto_empresa'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto ContactoEmpresa y el intercambio de información con el hydrator.
 */
class ContactoEmpresa
{

    private $con_emp_id;

    private $emp_id;

    private $con_emp_nombre;

    private $con_emp_cargo;

    private $con_emp_tipo;

    private $con_emp_telefono;

    function __construct()
    {}

    /**
     *
     * @return the $con_emp_id
     */
    public function getCon_emp_id()
    {
        return $this->con_emp_id;
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
     * @return the $con_emp_nombre
     */
    public function getCon_emp_nombre()
    {
        return $this->con_emp_nombre;
    }

    /**
     *
     * @return the $con_emp_cargo
     */
    public function getCon_emp_cargo()
    {
        return $this->con_emp_cargo;
    }

    /**
     *
     * @return the $con_emp_tipo
     */
    public function getCon_emp_tipo()
    {
        return $this->con_emp_tipo;
    }

    /**
     *
     * @return the $con_emp_telefono
     */
    public function getCon_emp_telefono()
    {
        return $this->con_emp_telefono;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $con_emp_id
     */
    public function setCon_emp_id($con_emp_id)
    {
        $this->con_emp_id = $con_emp_id;
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
     *            Ambigous <NULL, array> $con_emp_nombre
     */
    public function setCon_emp_nombre($con_emp_nombre)
    {
        $this->con_emp_nombre = $con_emp_nombre;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $con_emp_cargo
     */
    public function setCon_emp_cargo($con_emp_cargo)
    {
        $this->con_emp_cargo = $con_emp_cargo;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $con_emp_tipo
     */
    public function setCon_emp_tipo($con_emp_tipo)
    {
        $this->con_emp_tipo = $con_emp_tipo;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $con_emp_telefono
     */
    public function setCon_emp_telefono($con_emp_telefono)
    {
        $this->con_emp_telefono = $con_emp_telefono;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->con_emp_id = (isset($data['con_emp_id'])) ? $data['con_emp_id'] : null;
        $this->emp_id = (isset($data['emp_id'])) ? $data['emp_id'] : null;
        $this->con_emp_nombre = (isset($data['con_emp_nombre'])) ? $data['con_emp_nombre'] : null;
        $this->con_emp_cargo = (isset($data['con_emp_cargo'])) ? $data['con_emp_cargo'] : null;
        $this->con_emp_tipo = (isset($data['con_emp_tipo'])) ? $data['con_emp_tipo'] : null;
        $this->con_emp_telefono = (isset($data['con_emp_telefono'])) ? $data['con_emp_telefono'] : null;
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