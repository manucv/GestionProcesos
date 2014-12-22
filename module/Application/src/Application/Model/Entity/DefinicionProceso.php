<?php
/**
 * Objeto referente a la tabla de base de datos 'definicion_proceso'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto DefinicionProceso y el intercambio de información con el hydrator.
 */
class DefinicionProceso
{

    private $def_id;

    private $pro_id;

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
     * @return the $pro_id
     */
    public function getPro_id()
    {
        return $this->pro_id;
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
     *            Ambigous <NULL, array> $pro_id
     */
    public function setPro_id($pro_id)
    {
        $this->pro_id = $pro_id;
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
        $this->pro_id = (isset($data['pro_id'])) ? $data['pro_id'] : null;
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