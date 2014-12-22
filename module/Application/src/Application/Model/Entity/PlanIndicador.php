<?php
/**
 * Objeto referente a la tabla de base de datos 'plan_indicador'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto PlanIndicador y el intercambio de información con el hydrator.
 */
class PlanIndicador
{

    private $ind_id;

    private $pry_id;

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
     * @return the $pry_id
     */
    public function getPry_id()
    {
        return $this->pry_id;
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
     *            Ambigous <NULL, array> $pry_id
     */
    public function setPry_id($pry_id)
    {
        $this->pry_id = $pry_id;
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
        $this->pry_id = (isset($data['pry_id'])) ? $data['pry_id'] : null;
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