<?php
/**
 * Objeto referente a la tabla de base de datos 'valor_variable'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto ValorVariable y el intercambio de información con el hydrator.
 */
class ValorVariable
{

    private $val_var_id;

    private $var_id;

    private $val_valor;

    function __construct()
    {}

    /**
     *
     * @return the $val_var_id
     */
    public function getVal_var_id()
    {
        return $this->val_var_id;
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
     * @return the $val_valor
     */
    public function getVal_valor()
    {
        return $this->val_valor;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $val_var_id
     */
    public function setVal_var_id($val_var_id)
    {
        $this->val_var_id = $val_var_id;
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
     *
     * @param
     *            Ambigous <NULL, array> $val_valor
     */
    public function setVal_valor($val_valor)
    {
        $this->val_valor = $val_valor;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->val_var_id = (isset($data['val_var_id'])) ? $data['val_var_id'] : null;
        $this->var_id = (isset($data['var_id'])) ? $data['var_id'] : null;
        $this->val_valor = (isset($data['val_valor'])) ? $data['val_valor'] : null;
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