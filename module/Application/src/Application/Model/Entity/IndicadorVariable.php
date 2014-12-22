<?php
/**
 * Objeto referente a la tabla de base de datos 'indicardor_variable'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto IndicadorVariable y el intercambio de información con el hydrator.
 */
class IndicadorVariable
{

    private $ind_id;

    private $var_id;

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
     * @return the $var_id
     */
    public function getVar_id()
    {
        return $this->var_id;
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
     *            Ambigous <NULL, array> $var_id
     */
    public function setVar_id($var_id)
    {
        $this->var_id = $var_id;
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
        $this->var_id = (isset($data['var_id'])) ? $data['var_id'] : null;
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