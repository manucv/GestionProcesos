<?php
/**
 * Objeto referente a la tabla de base de datos 'grados'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto Grados y el intercambio de información con el hydrator.
 */
class Grados
{

    private $gra_id;

    private $gra_descripcion;

    function __construct()
    {}

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
     * @return the $gra_descripcion
     */
    public function getGra_descripcion()
    {
        return $this->gra_descripcion;
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
     *            Ambigous <NULL, array> $gra_descripcion
     */
    public function setGra_descripcion($gra_descripcion)
    {
        $this->gra_descripcion = $gra_descripcion;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->gra_id = (isset($data['gra_id'])) ? $data['gra_id'] : null;
        $this->gra_descripcion = (isset($data['gra_descripcion'])) ? $data['gra_descripcion'] : null;
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