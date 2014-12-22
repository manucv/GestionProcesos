<?php
/**
 * Objeto referente a la tabla de base de datos 'plan_responsable'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto PlanResponsable y el intercambio de información con el hydrator.
 */
class PlanResponsable
{

    private $per_id;

    private $pry_id;

    private $pla_res_tipo;

    function __construct()
    {}

    /**
     *
     * @return the $per_id
     */
    public function getPer_id()
    {
        return $this->per_id;
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
     * @return the $pla_res_tipo
     */
    public function getPla_res_tipo()
    {
        return $this->pla_res_tipo;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $per_id
     */
    public function setPer_id($per_id)
    {
        $this->per_id = $per_id;
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
     *            Ambigous <NULL, array> $pla_res_tipo
     */
    public function setPla_res_tipo($pla_res_tipo)
    {
        $this->pla_res_tipo = $pla_res_tipo;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->per_id = (isset($data['per_id'])) ? $data['per_id'] : null;
        $this->pry_id = (isset($data['pry_id'])) ? $data['pry_id'] : null;
        $this->pla_res_tipo = (isset($data['pla_res_tipo'])) ? $data['pla_res_tipo'] : null;
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