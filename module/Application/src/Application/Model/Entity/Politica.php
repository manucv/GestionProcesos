<?php
/**
 * Objeto referente a la tabla de base de datos 'politica'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto Politica y el intercambio de información con el hydrator.
 */
class Politica
{

    private $pol_id;

    private $pol_descripcion;

    function __construct()
    {}

    /**
     *
     * @return the $pol_id
     */
    public function getPol_id()
    {
        return $this->pol_id;
    }

    /**
     *
     * @return the $pol_descripcion
     */
    public function getPol_descripcion()
    {
        return $this->pol_descripcion;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $pol_id
     */
    public function setPol_id($pol_id)
    {
        $this->pol_id = $pol_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $pol_descripcion
     */
    public function setPol_descripcion($pol_descripcion)
    {
        $this->pol_descripcion = $pol_descripcion;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->pol_id = (isset($data['pol_id'])) ? $data['pol_id'] : null;
        $this->pol_descripcion = (isset($data['pol_descripcion'])) ? $data['pol_descripcion'] : null;
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