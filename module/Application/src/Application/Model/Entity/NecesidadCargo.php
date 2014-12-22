<?php
/**
 * Objeto referente a la tabla de base de datos 'necesidad_cargo'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto NecesidadCargo y el intercambio de información con el hydrator.
 */
class NecesidadCargo
{

    private $nec_id;

    private $car_id;

    private $nec_descripcion;

    function __construct()
    {}

    /**
     *
     * @return the $nec_id
     */
    public function getNec_id()
    {
        return $this->nec_id;
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
     * @return the $nec_descripcion
     */
    public function getNec_descripcion()
    {
        return $this->nec_descripcion;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $nec_id
     */
    public function setNec_id($nec_id)
    {
        $this->nec_id = $nec_id;
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
     *            Ambigous <NULL, array> $nec_descripcion
     */
    public function setNec_descripcion($nec_descripcion)
    {
        $this->nec_descripcion = $nec_descripcion;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->nec_id = (isset($data['nec_id'])) ? $data['nec_id'] : null;
        $this->car_id = (isset($data['car_id'])) ? $data['car_id'] : null;
        $this->nec_descripcion = (isset($data['nec_descripcion'])) ? $data['nec_descripcion'] : null;
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