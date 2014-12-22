<?php
/**
 * Objeto referente a la tabla de base de datos 'frecuencia'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto Frecuencia y el intercambio de información con el hydrator.
 */
class Frecuencia
{

    private $fre_id;

    private $fre_descripcion;

    function __construct()
    {}

    /**
     *
     * @return the $fre_id
     */
    public function getFre_id()
    {
        return $this->fre_id;
    }

    /**
     *
     * @return the $fre_descripcion
     */
    public function getFre_descripcion()
    {
        return $this->fre_descripcion;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $fre_id
     */
    public function setFre_id($fre_id)
    {
        $this->fre_id = $fre_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $fre_descripcion
     */
    public function setFre_descripcion($fre_descripcion)
    {
        $this->fre_descripcion = $fre_descripcion;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->fre_id = (isset($data['fre_id'])) ? $data['fre_id'] : null;
        $this->fre_descripcion = (isset($data['fre_descripcion'])) ? $data['fre_descripcion'] : null;
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