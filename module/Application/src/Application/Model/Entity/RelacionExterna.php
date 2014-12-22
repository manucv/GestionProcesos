<?php
/**
 * Objeto referente a la tabla de base de datos 'relacion_externa'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto RelacionExterna y el intercambio de información con el hydrator.
 */
class RelacionExterna
{

    private $rel_ext_id;

    private $car_id;

    private $rel_ext_descripcion;

    function __construct()
    {}

    /**
     *
     * @return the $rel_ext_id
     */
    public function getRel_ext_id()
    {
        return $this->rel_ext_id;
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
     * @return the $rel_ext_descripcion
     */
    public function getRel_ext_descripcion()
    {
        return $this->rel_ext_descripcion;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $rel_ext_id
     */
    public function setRel_ext_id($rel_ext_id)
    {
        $this->rel_ext_id = $rel_ext_id;
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
     *            Ambigous <NULL, array> $rel_ext_descripcion
     */
    public function setRel_ext_descripcion($rel_ext_descripcion)
    {
        $this->rel_ext_descripcion = $rel_ext_descripcion;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->rel_ext_id = (isset($data['rel_ext_id'])) ? $data['rel_ext_id'] : null;
        $this->car_id = (isset($data['car_id'])) ? $data['car_id'] : null;
        $this->rel_ext_descripcion = (isset($data['rel_ext_descripcion'])) ? $data['rel_ext_descripcion'] : null;
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