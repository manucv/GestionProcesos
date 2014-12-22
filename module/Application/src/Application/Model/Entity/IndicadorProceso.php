<?php
/**
 * Objeto referente a la tabla de base de datos 'indicador_proceso'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto IndicadorProceso y el intercambio de información con el hydrator.
 */
class IndicadorProceso
{

    private $ind_id;

    private $pro_id;

    function __construct()
    {}

    /**
     *
     * @return the $ind_id
     */
    public function getInd_id()
    {
        return $this->ind_id;
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
     *            Ambigous <NULL, array> $ind_id
     */
    public function setInd_id($ind_id)
    {
        $this->ind_id = $ind_id;
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
        $this->ind_id = (isset($data['ind_id'])) ? $data['ind_id'] : null;
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