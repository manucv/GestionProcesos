<?php
/**
 * Objeto referente a la tabla de base de datos 'indicador_valor'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto IndicadorValor y el intercambio de información con el hydrator.
 */
class IndicadorValor
{

    private $ind_val_id;

    private $ind_id;

    private $ind_val_valor;

    function __construct()
    {}

    /**
     *
     * @return the $ind_val_id
     */
    public function getInd_val_id()
    {
        return $this->ind_val_id;
    }

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
     * @return the $ind_val_valor
     */
    public function getInd_val_valor()
    {
        return $this->ind_val_valor;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $ind_val_id
     */
    public function setInd_val_id($ind_val_id)
    {
        $this->ind_val_id = $ind_val_id;
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
     *            Ambigous <NULL, array> $ind_val_valor
     */
    public function setInd_val_valor($ind_val_valor)
    {
        $this->ind_val_valor = $ind_val_valor;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->ind_val_id = (isset($data['ind_val_id'])) ? $data['ind_val_id'] : null;
        $this->ind_id = (isset($data['ind_id'])) ? $data['ind_id'] : null;
        $this->ind_val_valor = (isset($data['ind_val_valor'])) ? $data['ind_val_valor'] : null;
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