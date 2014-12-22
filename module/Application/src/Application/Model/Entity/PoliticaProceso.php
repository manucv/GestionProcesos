<?php
/**
 * Objeto referente a la tabla de base de datos 'politica_proceso'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto PoliticaProceso y el intercambio de información con el hydrator.
 */
class PoliticaProceso
{

    private $pol_id;

    private $pro_id;

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
     * @return the $pro_id
     */
    public function getPro_id()
    {
        return $this->pro_id;
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
        $this->pol_id = (isset($data['pol_id'])) ? $data['pol_id'] : null;
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