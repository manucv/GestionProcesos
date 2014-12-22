<?php
/**
 * Objeto referente a la tabla de base de datos 'actividad'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto Actividad y el intercambio de información con el hydrator.
 */
class Actividad
{

    private $act_id;

    private $pro_id;

    private $act_descripcion;

    function __construct()
    {}

    /**
     *
     * @return the $act_id
     */
    public function getAct_id()
    {
        return $this->act_id;
    }

    /**
     *
     * @return the $pro_id
     */
    public function getPro_id()
    {
        return $this->pro_id;
    }

    /**
     *
     * @return the $act_descripcion
     */
    public function getAct_descripcion()
    {
        return $this->act_descripcion;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $act_id
     */
    public function setAct_id($act_id)
    {
        $this->act_id = $act_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $pro_id
     */
    public function setPro_id($pro_id)
    {
        $this->pro_id = $pro_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $act_descripcion
     */
    public function setAct_descripcion($act_descripcion)
    {
        $this->act_descripcion = $act_descripcion;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->act_id = (isset($data['act_id'])) ? $data['act_id'] : null;
        $this->pro_id = (isset($data['pro_id'])) ? $data['pro_id'] : null;
        $this->act_descripcion = (isset($data['act_descripcion'])) ? $data['act_descripcion'] : null;
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