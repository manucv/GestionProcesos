<?php
/**
 * Objeto referente a la tabla de base de datos 'proyecto'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto Proyecto y el intercambio de información con el hydrator.
 */
class Proyecto
{

    private $pry_id;

    private $tip_pro_id;

    private $pry_codigo;

    private $obj_id;

    function __construct()
    {}

    /**
     *
     * @return the $pry_id
     */
    public function getPry_id()
    {
        return $this->pry_id;
    }

    /**
     *
     * @return the $tip_pro_id
     */
    public function getTip_pro_id()
    {
        return $this->tip_pro_id;
    }

    /**
     *
     * @return the $pry_codigo
     */
    public function getPry_codigo()
    {
        return $this->pry_codigo;
    }

    /**
     *
     * @return the $obj_id
     */
    public function getObj_id()
    {
        return $this->obj_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $pry_id
     */
    public function setPry_id($pry_id)
    {
        $this->pry_id = $pry_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $tip_pro_id
     */
    public function setTip_pro_id($tip_pro_id)
    {
        $this->tip_pro_id = $tip_pro_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $pry_codigo
     */
    public function setPry_codigo($pry_codigo)
    {
        $this->pry_codigo = $pry_codigo;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $obj_id
     */
    public function setObj_id($obj_id)
    {
        $this->obj_id = $obj_id;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->pry_id = (isset($data['pry_id'])) ? $data['pry_id'] : null;
        $this->tip_pro_id = (isset($data['tip_pro_id'])) ? $data['tip_pro_id'] : null;
        $this->pry_codigo = (isset($data['pry_codigo'])) ? $data['pry_codigo'] : null;
        $this->obj_id = (isset($data['obj_id'])) ? $data['obj_id'] : null;
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