<?php
/**
 * Objeto referente a la tabla de base de datos 'definicion'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto Definicion y el intercambio de información con el hydrator.
 */
class Definicion
{

    private $def_id;

    private $def_abreviado;

    private $def_descripcion;

    function __construct()
    {}

    /**
     *
     * @return the $def_id
     */
    public function getDef_id()
    {
        return $this->def_id;
    }

    /**
     *
     * @return the $def_abreviado
     */
    public function getDef_abreviado()
    {
        return $this->def_abreviado;
    }

    /**
     *
     * @return the $def_descripcion
     */
    public function getDef_descripcion()
    {
        return $this->def_descripcion;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $def_id
     */
    public function setDef_id($def_id)
    {
        $this->def_id = $def_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $def_abreviado
     */
    public function setDef_abreviado($def_abreviado)
    {
        $this->def_abreviado = $def_abreviado;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $def_descripcion
     */
    public function setDef_descripcion($def_descripcion)
    {
        $this->def_descripcion = $def_descripcion;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->def_id = (isset($data['def_id'])) ? $data['def_id'] : null;
        $this->def_abreviado = (isset($data['def_abreviado'])) ? $data['def_abreviado'] : null;
        $this->def_descripcion = (isset($data['def_descripcion'])) ? $data['def_descripcion'] : null;
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