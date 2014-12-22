<?php
/**
 * Objeto referente a la tabla de base de datos 'periodicidad'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto Periodicidad y el intercambio de información con el hydrator.
 */
class Periodicidad
{

    private $pri_id;

    private $pri_descripcion;

    function __construct()
    {}

    /**
     *
     * @return the $pri_id
     */
    public function getPri_id()
    {
        return $this->pri_id;
    }

    /**
     *
     * @return the $pri_descripcion
     */
    public function getPri_descripcion()
    {
        return $this->pri_descripcion;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $pri_id
     */
    public function setPri_id($pri_id)
    {
        $this->pri_id = $pri_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $pri_descripcion
     */
    public function setPri_descripcion($pri_descripcion)
    {
        $this->pri_descripcion = $pri_descripcion;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->pri_id = (isset($data['pri_id'])) ? $data['pri_id'] : null;
        $this->pri_descripcion = (isset($data['pri_descripcion'])) ? $data['pri_descripcion'] : null;
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