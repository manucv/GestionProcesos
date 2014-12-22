<?php
/**
 * Objeto referente a la tabla de base de datos 'conocimiento_cargo'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto ConocimientoCargo y el intercambio de información con el hydrator.
 */
class ConocimientoCargo
{

    private $con_car_id;

    private $car_id;

    private $con_car_descripcion;

    function __construct()
    {}

    /**
     *
     * @return the $con_car_id
     */
    public function getCon_car_id()
    {
        return $this->con_car_id;
    }

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
     * @return the $con_car_descripcion
     */
    public function getCon_car_descripcion()
    {
        return $this->con_car_descripcion;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $con_car_id
     */
    public function setCon_car_id($con_car_id)
    {
        $this->con_car_id = $con_car_id;
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
     *            Ambigous <NULL, array> $con_car_descripcion
     */
    public function setCon_car_descripcion($con_car_descripcion)
    {
        $this->con_car_descripcion = $con_car_descripcion;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->con_car_id = (isset($data['con_car_id'])) ? $data['con_car_id'] : null;
        $this->car_id = (isset($data['car_id'])) ? $data['car_id'] : null;
        $this->con_car_descripcion = (isset($data['con_car_descripcion'])) ? $data['con_car_descripcion'] : null;
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