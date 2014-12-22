<?php
/**
 * Objeto referente a la tabla de base de datos 'cargo'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto Cargo y el intercambio de información con el hydrator.
 */
class Cargo
{

    private $car_id;

    private $dep_id;

    private $car_descripcion;

    private $car_mision;

    private $car_conocimiento;

    function __construct()
    {}

    /**
     *
     * @return the $car_id
     */
    public function getCar_id()
    {
        return $this->car_id;
    }

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
     * @return the $car_descripcion
     */
    public function getCar_descripcion()
    {
        return $this->car_descripcion;
    }

    /**
     *
     * @return the $car_mision
     */
    public function getCar_mision()
    {
        return $this->car_mision;
    }

    /**
     *
     * @return the $car_conocimiento
     */
    public function getCar_conocimiento()
    {
        return $this->car_conocimiento;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $car_id
     */
    public function setCar_id($car_id)
    {
        $this->car_id = $car_id;
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
     *            Ambigous <NULL, array> $car_descripcion
     */
    public function setCar_descripcion($car_descripcion)
    {
        $this->car_descripcion = $car_descripcion;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $car_mision
     */
    public function setCar_mision($car_mision)
    {
        $this->car_mision = $car_mision;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $car_conocimiento
     */
    public function setCar_conocimiento($car_conocimiento)
    {
        $this->car_conocimiento = $car_conocimiento;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->car_id = (isset($data['car_id'])) ? $data['car_id'] : null;
        $this->dep_id = (isset($data['dep_id'])) ? $data['dep_id'] : null;
        $this->car_descripcion = (isset($data['car_descripcion'])) ? $data['car_descripcion'] : null;
        $this->car_mision = (isset($data['car_mision'])) ? $data['car_mision'] : null;
        $this->car_conocimiento = (isset($data['car_conocimiento'])) ? $data['car_conocimiento'] : null;
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