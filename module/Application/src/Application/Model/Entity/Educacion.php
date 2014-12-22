<?php
/**
 * Objeto referente a la tabla de base de datos 'educacion'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto Educacion y el intercambio de información con el hydrator.
 */
class Educacion
{

    private $car_id;

    private $gra_id;

    private $edu_descripcion;

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
     * @return the $gra_id
     */
    public function getGra_id()
    {
        return $this->gra_id;
    }

    /**
     *
     * @return the $edu_descripcion
     */
    public function getEdu_descripcion()
    {
        return $this->edu_descripcion;
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
     *            Ambigous <NULL, array> $gra_id
     */
    public function setGra_id($gra_id)
    {
        $this->gra_id = $gra_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $edu_descripcion
     */
    public function setEdu_descripcion($edu_descripcion)
    {
        $this->edu_descripcion = $edu_descripcion;
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
        $this->gra_id = (isset($data['gra_id'])) ? $data['gra_id'] : null;
        $this->edu_descripcion = (isset($data['edu_descripcion'])) ? $data['edu_descripcion'] : null;
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